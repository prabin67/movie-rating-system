<style>
    .bg-purple {
        background-color: var(--purple);
    }

    /* The "Forgot password" text */
    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }
</style>

<base href="/movie/">

<div class="container">
    <div class="row">
        <div class="col-md-12 min-vh-100 d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">

                    <!-- form card login -->
                    <div class="card rounded shadow shadow-sm">
                        <div class="card-header">
                            <h3 class="mb-0"> User Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" action="User/LoginCheck" method="POST">
                                <div class="form-group">
                                    <label for="uname1">Username</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="username" />
                                    <div class="invalid-feedback">Oops, you missed this one.</div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="password" />
                                    <div class="invalid-feedback">Enter your password too!</div>
                                </div>
                                <div>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" />
                                        <span class="custom-control-indicator"></span>
                                        <br>
                                        <input type="submit" class="btn btn-success btn-lg float-left" id="btnLogin" name="submit" value="login" /><br>
                                        
                                        
                                    </label>

                                    
                                    <br>
                                    <br>
                                </div>
                                <div><span class="psw"> <a href="User/Register">create new account</a></span></div>
                                
                                <div>
                                    <label>
                                        <input type="checkbox" checked="checked" name="remember" /> Remember me
                                    </label>
                                </div>
                                <br>
                                <br>
                                <a class="btn btn-danger" href="Home/Display">Cancel</a>
                               
                            </form>
                        </div>

                    </div>
                    <!-- /form card login -->

                </div>


            </div>


        </div>

    </div>

</div>