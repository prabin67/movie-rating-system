

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
            <form class="mt-3" method="POST" action="/movie/Critic/updateUserdata" role="form" autocomplete="off" >
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="firstname">Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" required="" id="name" value="<?php echo $row['cname']; ?>" />
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                             <label for="email">Email: <span class="text-danger">*</span></label>
                             <input type="email" class="form-control" name="email" id="email"
                                required="" value="<?php echo $row['cemail']; ?>" />
                                
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
                            <input type="text" class="form-control" id="phone" name="phone" required="" value="<?php echo $row['cphone']; ?>" />
                            
                        </div>
                    </div>
                </div>
               
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="phone">Address:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address" name="address" required=""
                                 value="<?php echo $row['caddress']; ?>" />
                                 
                        </div>
                    </div>
                </div>
                 <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="phone">newspaper:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="newspaper" name="newspaper" required=""
                                 value="<?php echo $row['cnewspaper']; ?>" />
                                 
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
<script>
    let name = document.querySelector("#name");
    let email = document.querySelector("#email");
    let password = document.querySelector("#password");
   
    let phone = document.querySelector("#phone");
    let address = document.querySelector("#address");
    
    
    let nameTest;
    let emailTest;
    let passwordTest;
  
    let phoneTest;
    let addressTest;
   

    name.addEventListener("blur", (e) => {
        let nameRegex = /^[A-Za-z]{3,15}\s[A-Za-z]{3,15}$/i;
        if (nameRegex.test(name.value)) {
            e.target.classList.remove("is-invalid");
            e.target.classList.add("is-valid");
            nameTest = true;
        } else {
            e.target.classList.remove("is-valid");
            e.target.classList.add("is-invalid");
            nameTest = false;
        }
    });

    email.addEventListener("blur", (e) => {
        let emailRegex = /^[a-z0-9](\.?\_?[a-z0-9]){5,}@g(oogle)?mail\.com$/i;
        if (emailRegex.test(email.value)) {
            e.target.classList.remove("is-invalid");
            e.target.classList.add("is-valid");
            emailTest = true;
        } else {
            e.target.classList.remove("is-valid");
            e.target.classList.add("is-invalid");
            emailTest = false;
        }
    });


    password.addEventListener("blur", (e) => {
        let passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,16}$/i;
        if (passwordRegex.test(password.value)) {
            e.target.classList.remove("is-invalid");
            e.target.classList.add("is-valid");
            passwordTest = true;
        } else {
            e.target.classList.remove("is-valid");
            e.target.classList.add("is-invalid");
            passwordTest = false;
        }
    });

    

    

    phone.addEventListener("blur", (e) => {
        let phoneRegex = /^[0-9]{10}$/;
        if (phoneRegex.test(phone.value)) {
            e.target.classList.remove("is-invalid");
            e.target.classList.add("is-valid");
            phoneTest = true;
        } else {
            e.target.classList.remove("is-valid");
            e.target.classList.add("is-invalid");
            phoneTest = false;
        }
    });

    address.addEventListener("blur", (e) => {
        let addressRegex = /[\w\W]{5,40}/;
        if (addressRegex.test(address.value)) {
            e.target.classList.remove("is-invalid");
            e.target.classList.add("is-valid");
            addressTest = true;
        } else {
            e.target.classList.remove("is-valid");
            e.target.classList.add("is-invalid");
            addressTest = false;
        }
    });
    setInterval(function() {
        if (nameTest && nameTest && emailTest && passwordTest && phoneTest &&
            addressTest) {
            register.removeAttribute("disabled", "disabled");
        } else {
            register.setAttribute("disabled", "disabled");
        }
    }, 500);
    </script>
         