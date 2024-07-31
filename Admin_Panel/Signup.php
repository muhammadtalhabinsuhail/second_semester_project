<?php include "partials/_db_connect.php"; ?>
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
    $showAlert = false;
    $showError = false;
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    
 
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  // $exists=false;
  //Chect weather this username exists
  $existsql = "SELECT * FROM users WHERE username = '$username'";
  $result = mysqli_query($conn, $existsql);
  $numExistrows = mysqli_num_rows($result);
  if($numExistrows>0){
      // $exists = true;
      $showError = "username already exists";
  }
  else{
      // $exists = false;
  
  if(($password == $cpassword)){
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO users(username, passwords, dt)  VALUES('$username', '$hash', current_timestamp());";
      $result = mysqli_query($conn, $sql);
      if($result){
          $showAlert = true;
      }
      header("location: register.php");
  }
  else{
      $showError = "Password do not match";
  }
  }
  }
  ?>
    <section class="side">
  
        <img src="images\welcome2 (1).png" alt="">

    </section>
    <section class="main">
   
        <div class="login-container">
 
            <p class="title">Welcome back</p>
            <div class="separator"></div>
            <?php 
            if($showAlert){
                echo '<p style="color: 6FEC00;">Your account is now created and you can login &#128522;';
            }
            if($showError){
                echo '<p style="color: #FF6262;">'. $showError . ' &#128561;';
            }
            ?>
            <p class="welcome-message">Please provide Your Username and password for access to all our services.
            </p>
            <form action="Signup.php" method="POST" class="login-form">
                <div class="form-control">
                    <input type="text" placeholder="Username" Required name="username">
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Password" Required name="password">
                    <i class="fas fa-lock"></i>
                    
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Confirm Password" Required name="cpassword">
                    <i class="fas fa-lock"></i>
                   
                </div>
                <div class="form-control2"> <a style="color: #fff;" href="register.php">I have an account</a></div>
                <button class="submit">Register Now</button>
            </form>
        </div>
    </section>
    <div class="previous" style="position:relative; left: 10px; color: #fff;">
    <a href="index.php">&laquo; Previous</a>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</html>