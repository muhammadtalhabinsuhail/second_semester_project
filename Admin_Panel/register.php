<?php

include "partials/_db_connect.php";
session_start();
  $login = false;
  $showError = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
  

$username = $_POST['username'];
$password = $_POST['password'];

    // $sql = "SELECT * FROM users WHERE username='$username' AND passwords='$password'";
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num >0){
        $row = mysqli_fetch_assoc($result); 
            if(password_verify($password, $row['passwords'])){
       
        $_SESSION['loggedin'] = true;
        $_SESSION['srno'] = $row['srno'];
        $_SESSION['username'] = $username;
        
    }
    header("location: index.php");
}
elseif($username == "Add panel admin" && $password == "Add panel admin"){
    header("location: add_product.php");
  }
 elseif($username == "test panel admin" && $password == "test panel admin"){
  header("location: test_product.php");
  }
  elseif($username == "cpri panel admin" && $password == "cpri panel admin"){
    header("location:cpri_product.php");
  }
  else{;
    $showError = "Invalid credentials";
}

}

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRS - Software requirements specification</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,700&display=swap" rel="stylesheet">
</head>

<body>
    <?php
//    if($login){
//    echo '
//    <div class="alert alert-success alert-dismissible fade show" role="alert">
//    <strong>Success</strong> You are loggedin
//    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//      <span aria-hidden="true">&times;</span>
//    </button>
//  </div>
// ';
//    }
//    if($showError){
//     echo '
//     <div class="alert alert-danger alert-dismissible fade show" role="alert">
//     <strong>Error</strong> ' . $showError . '
//     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//       <span aria-hidden="true">&times;</span>
//     </button>
//   </div>
//  ';
//     }
   ?>

    <section class="side">

        <img src="images\welcome2 (1).png" alt="">

    </section>
    <section class="main">

        <div class="login-container">

            <p class="title">Login To Our Application</p>
            <div class="separator"></div>
            <?php 
           
            if($login){
                echo '<p style="color: #6FEC00;">Your are loggedin';
            }
            if($showError){
                echo '<p style="color: #FF6262;">' . $showError . '';
            }
            ?>
            <p class="welcome-message">Please provide login credential to proceed and have access to all our services.
            </p>
            <form action="register.php" method="POST" class="login-form">
                <div class="form-control">
                    <input type="text" placeholder="Username" Required name="username">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Password" Required name="password">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="form-control2"> <a style="color: #fff;" href="Signup.php">Create an account</a></div>
                <button class="submit">Login</button>
            </form>
        </div>
    </section>
    <div class="previous" style="position:relative; left: 10px; color: #fff;">
        <a href="index.php">&laquo; Previous</a>
    </div>
</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script> -->

</html>