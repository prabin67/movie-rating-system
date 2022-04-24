

<div class="container">

<main>
    <div class="col-md-6 min-vh-100 d-flex flex-column justify-content-center">
        <div class="card rounded shadow shadow-sm">
             <div class="card-header">
                <h3 class="mb-0">update</h3>
            </div>
            <div class="card-body">
<?php
while ($row = $result->fetch_assoc()) {

?>
            <form class="mt-3" method="POST" action="/movie/Admin/updateUserData" role="form" autocomplete="off" >
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="firstname">Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" required="" id="fullname" value="<?php echo $row['aname']; ?>" />
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                             <label for="email">Email: <span class="text-danger">*</span></label>
                             <input type="email" class="form-control" name="email" id="email"
                                required="" value="<?php echo $row['aemail']; ?>" />
                                
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="email">Password: <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" id="password"
                             required="" value="" />
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="phone">Contact Number:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone" name="phone" required="" value="<?php echo $row['aphone']; ?>" />
                            
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="phone">Address:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" required=""
                                 value="<?php echo $row['aaddress']; ?>" />
                                 
                        </div>
                    </div>
                </div>
                   <div class="row">
                    <div class="col">
                        <input type="submit" name="submit" value="update" class="btn btn-primary" />
                       
                    </div>

                </div>
            </form>
            <?php
        }
            ?>
        </div>
        </div>
    </div>
</main>

</div>
         