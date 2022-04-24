<?php
session_start();
  class UserController{
       private $user;
       public $result;
       public $uid;
       public $comment;
       public $mid;
       public $result2;
  	   function __construct(){
  	   	  require_once "models/User.php";
          $this->user=new User();
  	   }
       
      function Registration()
      {
        include 'views/User/registration1.php';
      }



 public function WriteComment()
    {

     //send data to model */
    if (isset($_POST["submit"])) {
         
        $this->uid = $_SESSION['user_id'];
        $this->comment = $_POST["ucomment"];
        $this->mid = $_GET['mid'];

        //echo $this->uid . "<br>". $this->comment . "<br>". $this->mid;
        //calling insert function
        $result = $this->user->Write($this->uid,$this->mid,$this->comment);
        if ($result) {
            echo "<script> alert ('Comment  Successfully!'); 
           history.go(-1);
                   </script>";
        } else {
            echo "<script> alert ('Failed to Comment!'); 
            history.go(-1);
                     </script>";
        }
    }
    else{
          echo "error";
    }
    }


  function User()
  {
    $this->result = $this->user->ViewMovie();

    include "views/Dashboard/index.php";
  }


 function getUserData()
    {
        $result = $this->user->getUserData();
        include 'views/User/edit.php';
    }

    function updateUserData()
    {
        if(isset($_POST['submit']))
        {
            $uname=$_POST['name'];
            $uemail=$_POST['email'];
            $upassword=$_POST['password'];
            $uphone=$_POST['phone'];
            $uaddress=$_POST['address'];

            $result = $this->user->updateUserData($uname,$uemail,$upassword,$uphone,$uaddress);
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
   function Cart()
   {
      require_once 'views/User/Viewmovie.php';
   }

 

   function addm()
   {
      $mid = $_GET['mid'];
      $this->result = $this->user->addCart($mid);
       $this->result2=$this->user->getRate($mid);
      require_once 'views/User/Viewmovie.php';
      //header('location: Cart');
   }

      function UserRegistration()
       {
        $this->user->name = $_POST['name'];
        $this->user->email = $_POST['email'];
        $this->user->password = $_POST['password'];
        $this->user->cpassword = $_POST['cpassword'];
        $this->user->phone = $_POST['phone'];
        $this->user->address = $_POST['address'];
        $this->user->date = date('y-m-d h:i:s');



        $result = $this->user-> UserRegistraionCheck();
        $result = $this->user->RegisterUser();
        if ($result == TRUE) {
            echo "<script> alert ('SignUp Successfully!'); 
            history.go(-2)
           </script>";
        } else {
            echo "<script> alert ('Failed to SignUp!'); 
            history.go(-1)
           </script>";
        }
       }

       function Login(){
          include "views/User/login.php";
       }

       function Register(){
           include "views/User/registration1.php";
       }


      function history(){
        $this->result = $this->user->Detail();
         include "views/User/detail.php";
      }

 function logout()
    {
        session_unset();
        session_destroy();
        echo "<script>location.href = '/movie/User/Login'</script>";
    }


       function RegisterData(){
       	$this->user->name = $_POST['name'];
        $this->user->email = $_POST['email'];
        $this->user->password = $_POST['password'];
        $this->user->phone = $_POST['phone'];
        $this->user->address = $_POST['address'];
        $this->user->news = $_POST['news'];
       



        $result = $this->criticobj->criticCheck();
        $result = $this->criticobj->RegisterUser();
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

      /*  public function View(){
        //receive sid here
        $mid = $_GET["mid"];
        $_SESSION['mid']=$_GET["mid"];
        //receive sid here
       
        //send data to model
        $this->user->mid = $mid;
        

        require 'views/Admin/Viewmovie.php'; 
    }*/

       function LoginCheck(){
       		//login data will be received here

            if(isset($_POST["submit"])){
       	    $username=$_POST["username"];
       	    $password=$_POST["password"];
            //validation check
       	    if(empty($username) || empty($password)){
       	    	echo  "<script> alert ('Username or Password Empty!'); 
						         location='Login';
					           </script>";
       	    }else{
       	    	//set values to model
       	    	$this->user->username=$username;
       	    	$this->user->password=$password;
       	    	//$this->user->setUsername($username);

              $result=$this->user->CheckUsers();
              if($result!= 0){
                 while ($row = $result->fetch_assoc()) {
                $_SESSION['user_id'] = $row['uid'];
                 header('Location: ../User/User');
                }
              }else{
                echo "<script> alert ('Login Failed!'); 
                     location='Login';
                     </script>";
              }
             
       	    }
          }

       }

  }

?>