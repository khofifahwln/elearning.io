<!DOCTYPE html>
<html lang="en">
<head>
<title>Log In E-learning</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
session_start();
?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <?php
            if (isset($_SESSION['success'])) {
            ?>
        <div class="alert alert-success"><?= $_SESSION['success'] ?></div>
            <?php
            unset($_SESSION['success']);
            } else if (isset($_SESSION['danger'])) {
            ?>
        <div class="alert alert-danger"><?= $_SESSION['danger'] ?></div>
            <?php
            unset($_SESSION['danger']);
            }
            ?>

<div class="card">
  <div class="card-body">
  <h4 style="text-align: center;"><b>LOG IN E-LEARNING</b></h2>
  <br>
  <form action="login-proccess.php" method="post">
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="name@gmail.com" required style="border-radius: 20px;">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="****" required style="border-radius: 20px;">
                    </div>
                    <button type="submit" class="btn btn-primary" name="login" style="width: 500px; border-radius: 20px; margin-left: 5px;">Login</button>
                </form>
                <hr>
                <p style="text-align:center;">Don't have an account yet? <a class="text-decoration-none" href="register.php">Sign Up</a></p>
            </div>
  </div>
</div>
    </div>
        </div>
    </div>
</div>
</body>
</html>