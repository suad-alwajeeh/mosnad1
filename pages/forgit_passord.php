<?php require("layout/auth_header.php")?>
 
<div class="col-md-4 col-sm-12  border py-3 px-4">
                <form action="../logic/login.php" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="h2 text-primary fw-bold border-bottom">
forgit your password 
                            </div>
                            <div class="h6 text-grey">
 

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
                      
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                            <div class="d-flex justify-content-start">
                                <div class="text-grey mx-1">back to ,</div>

                                <a href="login.php" class="text-primary">login</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <?php require_once("./layout/auth_footer.php")?>
