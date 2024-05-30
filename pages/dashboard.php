<!DOCTYPE html>
<html lang="en">


<?php
session_start();
if (isset($_SESSION['userEmail'])) {
    #echo "Welcome, " . $_SESSION['userEmail'] . "!";
} else {
    header("Location: ../pages/login.php");
    exit;
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>mosnad|dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SUAD org.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">roles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">permissions</a>
                    </li>

                </ul>

                <form class="d-flex" action="../logic/logout.php" method="post">
                    <button class="btn btn-outline-success" type="submit"><?php echo $_SESSION['userEmail']; ?> logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
             <div class="col-md-6">

                <div class="contener-fluid">
                    <div class="h2">change password</div>
                    <?php if ($_SESSION['userType'] == 1 || $_SESSION['userType'] == 2) {
                    ?>
                        <form action="../logic/chang_password.php" method="post">
                            <div class="row">

                                <div class="col-sm-12 col-md-6 my-1">
                                    <label for="email">Password</label>
                                    <div>
                                        <input type="text" class="form-control" name="password" required id="" />
                                    </div>
                                    <div class="text-dark">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6 my-1">
                                    <label for="email">Password Confirme</label>
                                    <div>
                                        <input type="password" class="form-control" name="password_confirme" required id="" />
                                    </div>
                                    <div class="text-dark">
                                    </div>
                                </div>

                                <div class="col-12 my-1">
                                    <button type="submit" class="btn btn-primary w-100">save</button>

                                </div>
                            </div>
                        </form>
                    <?php } else {

                    ?>
                    <?php

                    }
                    ?>
                </div>

            </div>
        </div>
    </div>


    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script>

    </script>
</body>

</html>