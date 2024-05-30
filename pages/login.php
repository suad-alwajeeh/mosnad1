<?php require("layout/auth_header.php")?>
 
<div class="col-md-4 col-sm-12  border py-3 px-4">
                <form action="../logic/login.php" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="h2 text-primary fw-bold border-bottom">
                                LOGIN
                            </div>
                            <div class="h6 text-grey">

                               
                                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                } else{
                    echo " Welcome Back...";
                } 
                ?> 

                            </div>
                        </div>
                        <div class="col-12 my-1">
                            <label for="email">User Email</label>
                            <div>
                                <input type="email" class="form-control" name="email" required id="" />
                            </div>
                            <div class="text-dark">
                                *the email is required
                            </div>
                        </div>
                        <div class="col-12 my-1">
                            <label for="email">User Password</label>
                            <div class="">
                                <input type="password" class="form-control" name="password" required id="" />
                            </div>
                            <div class="text-dark">
                                <a href="forgit_passord.php">forgit my password</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                            <div class="d-flex justify-content-start">
                                <div class="text-grey mx-1">you dont have account,</div>

                                <a href="register.php" class="text-primary">register</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <?php require_once("./layout/auth_footer.php")?>
