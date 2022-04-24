<?php
class Movie{
    public $uid;
    public $username;
    public $password;
    public $sid;
    public $lid;
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

      public function MovieCheck()
    {   
        $nameCheck = false;
        $directorCheck = false;
        $actorCheck = false;
        $writerCheck = false;
        $plotCheck = false;
        $genreCheck = false;
        $dateCheck = false;
        $yearCheck = false;
        $imageCheck = false;

        if (!empty($this->name)) {
            $nameCheck = true;
        }
        if (!empty($this->director)) {
            $directorCheck = true;
        }
        
        
       
        if (!empty($this->actor)) {
            $actorCheck = true;
        }
        
        if (!empty($this->writer)) {
            $writerCheck = true;
        }

        if (!empty($this->plot)) {
            $plotCheck = true;
        }

        if (!empty($this->genre)) {
            $genreCheck = true;
        }

        if (!empty($this->date)) {
            $dateCheck = true;
        }
        
        if (!empty($this->year)) {
            $yearCheck = true;
        }
        
        if (!empty($this->image)) {
            $imageCheck = true;
        }

        if ($nameCheck && $directorCheck &&  $actorCheck && $writerCheck && $plotCheck && $genreCheck && $dateCheck && $yearCheck && $imageCheck) {
            return true;
        } else {
            return false;
        }
    }


      public function UplodeMovie()
    {   
         

        $sql = "INSERT INTO movies(mname,mactor,mdirector,mwriter,mplot,mgenre,myear,mimage,uplode_date)
        VALUES('$this->name','$this->actor','$this->director','$this->writer','$this->plot','$this->genre','$this->year','$this->image','$this->date')";
        $result = $this->conn->query($sql);
        return $result;
    }


    //function to select all records
    public function selectAllRecords()
    {
        $sql = "SELECT * FROM movies ORDER BY mid DESC";
        $result = $this->conn->query($sql);
        return $result;
    }



     public function deleteRecord()
    {
        $sql = "DELETE FROM movies WHERE mid='$this->mid'";
        $result = $this->conn->query($sql);
        return $result;
    }


     public function UpdateMovie()
    {   
         

        $sql = "UPDATE movies SET mname=$this->name', mactor='$this->actor',mdirector='$this->director',mwriter='$this->writer',mplot='$this->plot',mgenre='$this->genre',myear='$this->year',mimage='$this->image',uplode_date='$this->date' WHERE mid='this->mid'";
        $result = $this->conn->query($sql);
        return $result;
    }


}

?>