
<base href="/movie/">

    <?php
                                   
         
         while($row = $this->result1->fetch_assoc())
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
           
            <form action="Critic/rate?mid=<?php echo $row['mid']; ?> " method="post">
             <div class="form-group">
               <label for="">Rate<span class="text-danger">*</span></label>
               <select name="rating" id="rating">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                 
               </select>
              </div>

               <button type="submit" class="btn btn-primary" name="submit">Post</button>
            </form>
            </div>
            

                                   
         <div class="container " style="width: 100%; height: 300px; overflow-y: scroll;">
            <?php

         while($row1= $this->result->fetch_assoc())
         {
    ?>
    <div class=" container row mt-2 ml-5 mr-2" style="box-shadow: 0 0 10px black;">
      <label class="col-lg-2 col-xl-2 col"> <?php echo $row1['uname']; ?></label>
               <label class="col-lg-10 col-xl-10 col"><?php echo $row1['ucomment']; ?> </label>
    </div>
             <!-- <form action="Critic/rate?mid=<?php echo $row['mid']; ?> " method="post">
             <div class="form-group">
               <label for="">Rate<span class="text-danger">*</span></label>
               <select name="rating" id="rating">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                 
               </select>
              </div>
            </div>
             <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form> -->
            
            <?php 
         }
    ?>
    </div>
            
        </div>
                    

     <?php 
         }
    ?>
            
<script src="../libraries/jquery1/jquery.min.js"></script>
<script src="../libraries/bootstrap1/js/bootstrap.min.js"></script>
<script src="../libraries/js1/script.js"></script>
</body>

</html>