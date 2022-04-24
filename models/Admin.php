<?php

class Admin
{
    //for doctor/patient registration and admin/doctor updation
    public $name;
    public $aemail;
    public $apassword;
    public $confirmPassowrd;
    public $oldPassword;
    public $newPassword; //from admin/profile
    public $phone;
    public $age; //for patients
    public $gender; //for patients
    public $speciality; //for doctors
    public $description; //for doctors
    public $add;
    public $image;


    //for patinet info search
    public $data;
    public $parameter;


    //for DB connection
    private $conn;

    public function __construct()
    {
        require_once 'service/config.php';
        $this->conn = Config::getConnection();
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function CheckUser($username, $password)
    {
        //query
        //username or password matched or not.
        //check.
        $sql = "SELECT * FROM admin WHERE aemail='{$username}' AND apassword='{$password}'";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
           return $result; 
       }else
       {
        return 0 ;
       }
    }

function searchUser($term)
    {
        $sql = "SELECT * FROM critic WHERE (cname LIKE '%{$term}%' ) ";
        $result = $this->conn->query($sql);
            if($result->num_rows > 0)
            {
                return $result;
            }
            else
            {
                echo '<div class="mt-3 pl-3 text-white d-block">No matches found</div>';
            }
    }

    function getUserData()
    {
        $sql ="SELECT * FROM admin WHERE aid ='{$_SESSION['aid']}'";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0)
        {
            return $result;
        }
    }

    function updateUserData($aname,$aemail,$apassword,$aphone,$aaddress)
    {
        $sql ="UPDATE admin SET aname ='{$aname}',aemail='{$aemail}',apassword='{$apassword}',aphone='{$aphone}', aaddress ='{$aaddress}' WHERE aid ='{$_SESSION['aid']}'";
         $result = $this->conn->query($sql);
         if($result)
        {
            return true;
        }

    }

}