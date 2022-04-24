<?php
session_start();

//if (empty($_SESSION['admin'])) {
//echo "<script>window.location.href = '../Admin/login';</script>";
//}
class CriticController
{

    private $criticobj;
    public $username;
    public $password;
    public $result;
    public $result1;
    public $result2;
    public $mid;
    public $rate;
    public $cid;

    function __construct()
    {
        //require 'services/loader.php';
 
        // $this->admin = $_SESSION['admin'];
        include 'models/Critic.php';
        $this->criticobj = new Critic();

        // include 'models/LogModel.php';
        // $this->LogModelObj = new LogModel();
    }


    function Critic(){
         $this->result = $this->criticobj->Viewmov();
       include 'views/Critic/index.php'; 
    }

      function history(){
        $this->result = $this->criticobj->Detail();
         include "views/Critic/history.php";
      }
 function getUserdata()
    {
        $result = $this->criticobj->getUserdata();
        include 'views/Critic/edit1.php';
    }

    function updateUserdata()
    {
        if(isset($_POST['submit']))
        {
            $cname=$_POST['name'];
            $cemail=$_POST['email'];
            $cpassword=$_POST['password'];
            $cphone=$_POST['phone'];
            $caddress=$_POST['address'];
            $cnewspaper=$_POST['newspaper'];


            $result = $this->criticobj->updateUserdata($cname,$cemail,$cpassword,$cphone,$caddress,$cnewspaper);
            if($result == true)
            {
                echo  "<script> alert('Updated Successfully!');
                 history.go(-1)
                </script>"; 
            }
            else
            {
                echo  "<script> alert('Failed to update data!');
                history.go(-1)
                </script>"; 
            }

        }
    }


    function rate(){
     if(isset($_POST['submit']))
     {
       $this->mid = $_GET['mid'];
       $this->cid = $_SESSION['cid'];
       $this->rate= $_POST['rating'];
       $result= $this->criticobj->rate($this->cid,$this->mid,$this->rate);

     }
     if ($result == TRUE) {
            echo "<script> alert ('Inserted Successfully!'); 
            history.go(-1)
           </script>";
        } else {
            echo "<script> alert ('Failed to Insert!'); 
            history.go(-1)
           </script>";
        }
    }


 function CriticView()
   {
      require_once 'views/Critic/viewcomment.php';
   }

    function Addc()
   {
      $this->mid = $_GET['mid'];
       $this->result1 = $this->criticobj->Vmovie($this->mid);
      $this->result = $this->criticobj->Add($this->mid);
     
      require_once 'views/Critic/viewcomment.php';
      //header('location: Cart');
   }

    function criticAddition()
      {
        include 'views/Critic/addcritic.php';
      }

     function CriticAdd()
       {
        $this->criticobj->name = $_POST['name'];
        $this->criticobj->email = $_POST['email'];
        $this->criticobj->password = $_POST['password'];
        $this->criticobj->phone = $_POST['phone'];
        $this->criticobj->address = $_POST['address'];
        $this->criticobj->news = $_POST['news'];
       



        $result = $this->criticobj->criticCheck();
        $result = $this->criticobj->AddCritic();
        if ($result == TRUE) {
            echo "<script> alert ('Inserted Successfully!'); 
            history.go(-1)
           </script>";
        } else {
            echo "<script> alert ('Failed to Insert!'); 
            history.go(-1)
           </script>";
        }
       }

    function Login()
    {
        include 'views/Critic/clogin.php';
    }


function logout()
    {
        session_unset();
        session_destroy();
        echo "<script>location.href = '/movie/Critic/Login'</script>";
    }

    
    function CloginCheck()
    {
        //login data will be received here


        if (isset($_POST["submit"])) {
            $this->username = $_POST["username"];
            $this->password = $_POST["password"];

            //validation check
            if (empty($this->username) || empty($this->password)) {
                echo  "<script> alert('Username or Password Empty!');
                    location = 'Login';
                </script>";
            } else {
               
                $this->result = $this->criticobj->CheckClogin($this->username, $this->password);
                if($this->result != 0){
                    while ($row = $this->result->fetch_assoc()) {
                        $_SESSION['cid'] = $row['cid'];
                    }
                     
                    header('Location: ../Critic/Critic');

                }else{
                    echo "<script> alert('Login Failed!');
                        location = 'Login';
                    </script>";
                }
                /*$rowcount = mysqli_num_rows($result);
                if ($rowcount == 0) {
                    
                } else {
                    
                }*/
            }
        }
    }



     public function UpdateCritics()
   {
                    //receive cid here
        $cid = $_GET["cid"] ?? "";
                    //send data to model
        $this->criticobj->cid = $cid;
        //calling update function
        $result = $this->criticobj->selectAllRecords();
        include "views/Critic/updatecritic.php";
    }

      public function DeleteCritic()
                {
                    //receive cid here
                    $cid = $_GET["cid"];
                    //send data to model
                    $this->criticobj->cid = $cid;

                    //calling delete function 
                    $result = $this->criticobj->deleteCrecord();
                    if ($result == TRUE) {
                        echo "<script> alert ('Deleted Successfully!'); 
                        history.go(-1)
                        </script>";
                    } else {
                        echo "<script> alert ('Failed to Delete!'); 
                        history.go(-1)
                        </script>";
                    }
                 }

   /*
    public function profile()
    {
        require 'views/Admin/profile.php';
    }

    public function getAdminProfile()
    {
        $this->AdminModelObj->name = $_POST['fullname'];
        $this->AdminModelObj->email = $_POST['email'];
        if (empty($_POST['oldPassword']) && empty($_POST['newPassword'])) {
            $this->AdminModelObj->oldPassword = "";
            $this->AdminModelObj->newPassword = "";
        } else {
            $this->AdminModelObj->oldPassword = md5($_POST['oldPassword']);
            $this->AdminModelObj->newPassword = md5($_POST['newPassword']);
        }
        $this->AdminModelObj->phone = $_POST['phone'];
        $this->AdminModelObj->add = $_POST['add'];
        if ($_FILES['photo']['size'] == 0) {
            $this->AdminModelObj->image = $_SESSION['admin']['aimage'];
        } else {
            $myImage = $_FILES['photo'];
            $imageExtension = "";
            if ($myImage['type'] == "image/jpeg") {
                $imageExtension = ".jpeg";
            } elseif ($myImage['type'] == "image/jpg") {
                $imageExtension = ".jpg";
            } elseif ($myImage['type'] == "image/png") {
                $imageExtension = ".png";
            } else {
                $imageExtension = ".svg";
            }
            $myImage['name'] = $_POST['email'] . $imageExtension;
            $imageDestination = "images/gallery/" . $myImage['name'];

            if (move_uploaded_file($_FILES['photo']['tmp_name'], $imageDestination)) {
                echo "<script>console.log('Image moved')</script>";
            } else {
                echo "<script>console.log('Image cannot be moved')</script>";
            }
            $this->AdminModelObj->image = $imageDestination;
        }

        $result = $this->AdminModelObj->profileDetailsCheck();
        $result = $this->AdminModelObj->updateProfile();
        if ($result == TRUE) {
            echo "<script> alert ('Updated Successfully!'); 
            history.go(-1)
           </script>";
        } else {
            echo "<script> alert ('Failed to Update!'); 
            history.go(-1)
           </script>";
        }
    }*/
}
