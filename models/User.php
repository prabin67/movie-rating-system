<?php
class User{
	public $uid;
	public $username;
	public $password;
	public $sid;
	public $lid;
	public $mail;
	public $user_type;
	public $created_date;
	private $conn="";

	/*public function setUsername($username){
		$this->username=$username;
	}*/

	function __construct(){
		require_once "service/Config.php";
		$this->conn=Config::getConnection();
	}

    public function UserRegistraionCheck()
    {   
        $nameCheck = false;
        $mailCheck = false;
        $phoneCheck = false;
        $passwordCheck = false;
        $cpasswordCheck = false;
        $addressCheck = false;
        $dateCheck = false;

        if (!empty($this->name)) {
            $nameCheck = true;
        }
        if (!empty($this->email)) {
            $mailCheck = true;
        }
        
        
        if (!empty($this->phone) && strlen($this->phone) == 10) {
            $phoneCheck = true;
        }
        if (!empty($this->password)) {
            $passwordCheck = true;
        }
        
        if (!empty($this->cpassword)) {
            $cpasswordCheck = true;
        }

        if (!empty($this->address)) {
            $addressCheck = true;
        }

        if (!empty($this->date)) {
            $dateCheck = true;
        }

        if ($nameCheck && $mailCheck &&  $phoneCheck && $passwordCheck && $cpasswordCheck && $addressCheck && $dateCheck) {
            return true;
        } else {
            return false;
        }
    }

     
      function getRate($mid){
         $sql="SELECT CAST(AVG(ratings)AS DECIMAL(10,2)) as avg FROM rate WHERE mid='{$mid}'";
        $result= $this->conn->query($sql);
        if($result->num_rows > 0){
            return $result;
           
        }

    }

    function Detail(){
        $sql="SELECT * FROM movies INNER JOIN comment INNER JOIN user ON movies.mid=comment.mid AND user.uid=comment.uid WHERE user.uid= '{$_SESSION['user_id']}'";
         $result= $this->conn->query($sql);
        if($result->num_rows > 0){
            return $result;
           
        }

    }


      function addCart($mid)
    {
        $sql="SELECT * FROM movies WHERE mid='{$mid}'";
        
        $result= $this->conn->query($sql);
        if($result->num_rows > 0){
            return $result;
           
        }
        
    }

      public function RegisterUser()
    {   
         

        $sql = "INSERT INTO user(uname,uemail,upassword,uphone,uaddress,cr_date)
        VALUES('$this->name','$this->email','$this->password','$this->phone','$this->address','$this->date')";
        $result = $this->conn->query($sql);
        return $result;
    }

 public function Write($uid,$mid,$comment)
    {   
         

        $sql = "INSERT INTO comment (uid,mid,ucomment) VALUES ('{$uid}','{$mid}','{$comment}')";
        $result = $this->conn->query($sql);
        if($result){
           return true ; 
       }else
       {
        return false;
       }
       
    }

function getUserData()
    {
        $sql ="SELECT * FROM user WHERE uid ='{$_SESSION['user_id']}'";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0)
        {
            return $result;
        }
    }

    function updateUserData($uname,$uemail,$upassword,$uphone,$uaddress)
    {
        $sql ="UPDATE user SET uname ='{$uname}',uemail='{$uemail}',upassword='{$upassword}',uphone='{$uphone}', uaddress ='{$uaddress}' WHERE uid ='{$_SESSION['user_id']}'";
         $result = $this->conn->query($sql);
         if($result)
        {
            return true;
        }

    }

   
	function CheckUsers(){
        //query
        //username or password matched or not.
        //check.
        $sql="SELECT * FROM user WHERE uemail='$this->username' AND upassword='$this->password'";
        $result=$this->conn->query($sql);
        if($result->num_rows > 0){
        return $result;
        }else
        {
            return 0;
        }

	}

    public function ViewMovie(){
        $sql="SELECT * FROM movies ORDER BY mid";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            return $result;
        }
    }


}

?>