<?php
session_start();

//if (empty($_SESSION['admin'])) {
//echo "<script>window.location.href = '../Admin/login';</script>";
//}
class AdminController
{

    private $AdminModelObj;
    public $admin;
    public $searchResult;
    public $term;
    public $password;
    public $username;


    function __construct()
    {
        //require 'services/loader.php';
 
        // $this->admin = $_SESSION['admin'];
        include 'models/Admin.php';
        $this->AdminModelObj = new Admin();

        // include 'models/LogModel.php';
        // $this->LogModelObj = new LogModel();
    }

    function getUserData()
    {
        $result = $this->AdminModelObj->getUserData();
        include 'views/Admin/edit.php';
    }

    function updateUserData()
    {
        if(isset($_POST['submit']))
        {
            $aname=$_POST['name'];
            $aemail=$_POST['email'];
            $apassword=$_POST['password'];
            $aphone=$_POST['phone'];
            $aaddress=$_POST['address'];

            $result = $this->AdminModelObj->updateUserData($aname,$aemail,$apassword,$aphone,$aaddress);
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

     function searchData()
    {
        include 'views/Admin/search.php';
    }


    function Login()
    {
        include 'views/Admin/login.php';
    }

    function Search(){
        if(isset($_REQUEST["term"])){
            $this->term=$_REQUEST["term"];

        }
        $this->searchResult = $this->AdminModelObj->searchUser($this->term);


           // echo '<span>'.$row['cname'].'</span> <br>';
            echo '
            <div class="container">           
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone No</th>
                    <th>Action</th>
                  </tr>
                </thead>';

        while ($row= $this->searchResult->fetch_assoc()) {
                echo '
                <tbody>
                  <tr>
                    <td>'.$row['cname'].'</td>
                    <td>'.$row['caddress'].'</td>
                    <td>'.$row['cphone'].'</td>
                    <td><button class="btn btn-danger">Delete</button></td>
                  </tr>
                </tbody>';
                  }
               echo '</table>
            </div>
            ';
      

    }

     function logout()
    {
        session_unset();
        session_destroy();
        echo "<script>location.href = '/movie/Admin/Login'</script>";
    }


    
    function LoginCheck()
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
                //set values to model
                $this->AdminModelObj->username = $username;
                $this->AdminModelObj->password = $password;
                //$this->user->setUsername($username);

                $result = $this->AdminModelObj->CheckUser($this->username, $this->password);
                if ($result != 0) {
                    while ($row = $result->fetch_assoc()) {
                        $_SESSION['aid'] = $row['aid'];
                    }
                     header('Location: ../Dashboard/Admin');
                   
                } else {
                     echo "<script> alert('Login Failed!');
                        location = 'Login';
                    </script>";
                   
                }
            }
        }
    }
   /*
    $this->result = $this->criticobj->CheckClogin($this->username, $this->password);
                if($this->result != 0){
                    while ($row = $this->result->fetch_assoc()) {
                        $_SESSION['cid'] = $row['cid'];
                    }
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
