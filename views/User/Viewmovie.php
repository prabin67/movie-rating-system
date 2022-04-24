

<base href="/movie/">

    <?php
                                   
         
         while($row = $this->result->fetch_assoc())
         {
    ?>
       <div class="container">
         
        <div class="row">
            <div class="col">
                <label for="photo"></label><br>
                 <img  src="images/movies/<?=$row['mimage']?>" alt="" height="300px" width="300px">
  
               
            </div>
            </div>
        
            <div>
              <label>Title:</label>
               
                <?php echo $row['mname']; ?>
            </div>
       
            <div>
              <label>Director:</label>
                
                <?php echo  $row['mdirector']; ?> 
            </div>
       
            <div>
              <label>Actor:</label>
               
                <?php echo $row['mactor']; ?> 
            </div>
       

            <div>
              <label>Plot:</label>
               
                <?php echo $row['mplot']; ?>  
            </div>
       
            <div>
              <label for="image">Genre:</label>
               
                <?php echo $row['mgenre']; ?>
            </div>
       
            <div>
              <label for="image">Release Year:</label>
                
                <?php echo $row['myear']; ?> 
            </div>
             <div>
              <label for="image">Movie Rating:</label>
              <?php
              $row2=$this->result2->fetch_assoc();
              echo $row2['avg'];
              ?>
            </div>
            <form action="User/WriteComment?mid=<?=$row["mid"]?>" method="post" style="width:20%; height: 200px;>
             <div class="form-group" >
               <label for="Comment">Coment:<span class="text-danger">*</span></label>
                <input type="textarea" class="form-control" name="ucomment" placeholder="Write comment here" required=""id="ucomment" /><br>
                <button type="submit" class="btn btn-primary" name="submit">Post</button>
              </div>
            
            </form>
        </div>
                    

     <?php 
         }
    ?>
            
<script src="../libraries/jquery1/jquery.min.js"></script>
<script src="../libraries/bootstrap1/js/bootstrap.min.js"></script>
<script src="../libraries/js1/script.js"></script>
</body>

</html>