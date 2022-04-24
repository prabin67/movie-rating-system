 <?php
    

    class Critic{

         function __construct(){
        require_once "service/Config.php";
        $this->conn=Config::getConnection();
    }


 function CheckClogin($username,$password)
    {
        //query
        //username or password matched or not.
        //check.
        $sql = "SELECT * FROM critic WHERE cemail='{$username}' AND cpassword='{$password}'";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
           return $result; 
       }else
       {
        return 0 ;
       }
        
    }

     function getUserdata()
    {
        $sql ="SELECT * FROM critic WHERE cid='{$_SESSION['cid']}'";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0)
        {
            return $result;
        }
    }

    function updateUserdata($cname,$cemail,$cpassword,$cphone,$caddress,$cnewspaper)
    {
        $sql ="UPDATE critic SET cname ='{$cname}',cemail='{$cemail}',cpassword='{$cpassword}',cphone='{$cphone}', caddress ='{$caddress}',cnewspaper='{$cnewspaper}' WHERE cid ='{$_SESSION['cid']}'";
         $result = $this->conn->query($sql);
         if($result)
        {
            return true;
        }

    }

    function rate($cid,$mid,$rate){
        $sql1 = "SELECT * FROM rate WHERE cid='{$cid}'";
        $result1= $this->conn->query($sql1);
        if($result1->num_rows >0)
        {
            $sql2= "UPDATE rate SET ratings='{$rate}', rate_date = date('Y-m-d H:i:s') WHERE cid='{$cid}'";
            $result2= $this->conn->query($sql2);
             if($result2){
            return true;
           
        }

        }else
        {
             $sql="INSERT INTO rate(cid,mid,rate_date,ratings) VALUES ('{$cid}','{$mid}',date('Y-m-d H:i:s'),'{$rate}')";

             $result= $this->conn->query($sql);
             if($result)
             {
                return true;  
             }

        }

       

    }

   
    function vmovie($mid)
    {
        $sql="SELECT * FROM movies WHERE mid='{$mid}'";
        
        $result= $this->conn->query($sql);
        if($result->num_rows > 0){
            return $result;
           
        }
        
    }
     function Detail(){
        $sql="SELECT * FROM movies INNER JOIN rate INNER JOIN critic ON movies.mid=rate.mid AND critic.cid=rate.cid WHERE critic.cid= '{$_SESSION['cid']}'";
         $result= $this->conn->query($sql);
        if($result->num_rows > 0){
            return $result;
           
        }
    }

  function Add($mid)
    {
        $sql="SELECT * FROM comment inner join user WHERE comment.uid=user.uid AND comment.mid='{$mid}'";
        
        $result= $this->conn->query($sql);
        if($result->num_rows > 0){
            return $result;
           
        }
        
    }
    
public function Viewmov(){
        $sql="SELECT * FROM movies ORDER BY mid";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            return $result;
        }
    }

 public function criticCheck()
    {   
        $nameCheck = false;
        $emailCheck = false;
        $passwordCheck = false;
        $phoneCheck = false;
        $addressCheck = false;
        $newspaperCheck = false;
       
        if (!empty($this->name)) {
            $nameCheck = true;
        }
        if (!empty($this->email)) {
            $emailCheck = true;
        }
        
        
       
        if (!empty($this->password)) {
            $passwordCheck = true;
        }
        
        if (!empty($this->phone)) {
            $phoneCheck = true;
        }

        if (!empty($this->address)) {
            $addressCheck = true;
        }

        if (!empty($this->news)) {
            $newspaperCheck = true;
        }

        

        if ($nameCheck && $emailCheck &&  $passwordCheck && $phoneCheck && $addressCheck && $newspaperCheck) {
            return true;
        } else {
            return false;
        }
    }


      public function AddCritic()
    {   
          

        $sql = "INSERT INTO critic(cname,cemail,cpassword,cphone,caddress,cnewspaper)
        VALUES('$this->name','$this->email','$this->password','$this->phone','$this->address','$this->news')";
        $result = $this->conn->query($sql);
        return $result;
    }


 public function selectAllRecords()
    {
        $sql = "SELECT * FROM critic ORDER BY cid DESC";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function deleteCrecord()
    {
        $sql = "DELETE FROM critic WHERE cid='$this->cid'";
        $result = $this->conn->query($sql);
        return $result;
    }



}
?>