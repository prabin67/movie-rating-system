<?php
	class MovieController{



		 private $movieobj;
         

			    function __construct()
			    {
			        //require 'services/loader.php';
			 
			        // $this->admin = $_SESSION['admin'];
			        require_once "models/Movie.php";
			        $this->movieobj =new Movie();

			        // include 'models/LogModel.php';
			        // $this->LogModelObj = new LogModel();
			    }


		   function addmovie(){
		   	   include "views/Movie/addmovie.php";
		   }



		    function MovieRegistration()
			       {
			        $this->movieobj->name = $_POST['name'];
			        $this->movieobj->actor = $_POST['actor'];
			        $this->movieobj->director = $_POST['director'];
			        $this->movieobj->writer = $_POST['writer'];
			        $this->movieobj->plot = $_POST['plot'];
			        $this->movieobj->genre = $_POST['genre'];
			         $this->movieobj->image = $_POST['image'];
			         $this->movieobj->year = $_POST['year'];
			        $this->movieobj->date = date('y-m-d h:i:s');



			        
			        $result = $this->movieobj->UplodeMovie();
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

			     public function DeleteMovie()
			    {
			        //receive cid here
			        $mid = $_GET["mid"];
			        //send data to model
			        $this->movieobj->mid = $mid;

			        //calling delete function 
			        $result = $this->movieobj->deleteRecord();
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

			    public function Updatemovie()
                {
			        //receive cid here
			        $mid = $_GET["mid"] ?? "";
			        //send data to model
			        $this->movieobj->mid = $mid;
			        //calling update function
			        $result = $this->movieobj->selectAllRecords();
			        include "views/Movie/updatemovie.php";
                }


	}
?> 