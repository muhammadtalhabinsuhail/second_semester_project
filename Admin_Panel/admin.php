<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['adminuser'];
    $pswrd = $_POST['adminpass'];
    // Set a session variable to mark the Admin as logged in
    $_SESSION['admin_logged_in'] = true;

    if($username == "Add panel admin" && $pswrd == "Add panel admin"){
      header("location: Admin_Panel\add_product.php");
    }
   elseif($username == "test panel admin" && $pswrd == "test panel admin"){
    header("location: Admin_Panel\test_product.php");
    }
    elseif($username == "cpri panel admin" && $pswrd == "cpri panel admin"){
      header("location: Admin_Panel\cpri_product.php");
    }
    else{
            echo '
            <script>
            alert("sorry unrecognized username or password");
      window.location.href="index.php";
      </script>';
      
    }

}

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>SRS - Software requirement Specification</title>
</head>

<body>
    <div class="container my-3 text-light p-3 bg-dark bg-gradient">
        <h1 class="text-light text-center">Admin login panel</h1>
        <form action="admin.php" method="POST">
            <div class="mb-3">
                <i class="fas fa-user"></i>
                <label for="exampleInputEmail1" class="form-label">Username:</label>
                <input type="text" class="form-control" name="adminuser" required id="exampleInputEmail1"
                    aria-describedby="emailHelp">


            </div>
            <div class="mb-3">
                <i class="fas fa-lock"></i>
                <label for="exampleInputPassword1" class="form-label">Password:</label>
                <input type="password" class="form-control" name="adminpass" required id="exampleInputPassword1">

            </div>
            <div class="mb-3 form-check">

            </div>
            <button type="submit" class="btn btn-outline-light">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>