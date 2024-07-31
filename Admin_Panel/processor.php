<?php
session_start();

$Product_Test_Id=$_POST['value'];


$conn1 = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
$conn = mysqli_connect('localhost','root','','company');
// if (isset($_POST['approve'])) {


 
    $proname = $_POST['proname'];
    $prodesc = $_POST['prodesc'];
    $proprice = $_POST['proprice'];
    $proftre = $_POST['proftre'];
    $prousge = $_POST['prousge'];
    $warranty = $_POST['prowrnty'];

    
    // $filename = $_FILES['uploadfile']['name'];
    // $tempname = $_FILES['uploadfile']['tmp_name'];
    // $_SESSION['folder'] = "Admin_Panel/releasedpro/".$filename;
    // move_uploaded_file($tempname,$_SESSION['folder']);

    // echo '<img src="' . $_SESSION['folder'] . '" >';







    // Handle product image upload (you may need to adjust this part)
    $upload_dir = 'releasedpro/';
    $product_image = $_FILES['uploadfile']['name'];
    $target_file = $upload_dir . ($product_image);
    $tmp_dir=$_FILES['uploadfile']['tmp_name'];
    move_uploaded_file($tmp_dir, $target_file);

    // Insert data into the database
    // $stmt = $db->prepare("INSERT INTO products (product_id, product_name, product_title, product_quantity, product_price, product_image) VALUES (?, ?, ?, ?, ?, ?)");
    // $stmt->execute([$product_id, $product_name, $product_title, $product_quantity, $product_price, $product_image]);




 // Using prepared statement with bind_param
    $stmt = $conn->prepare("INSERT INTO electric_products (img_drc, product_name, product_desc, product_price, pr_features, pr_usage, warranty) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $product_image, $proname, $prodesc, $proprice, $proftre, $prousge, $warranty);
    $stmt->execute();
    $stmt->close();













    
   

   

    // // OR using regular mysqli_query (choose one of the methods)
    // $query = "INSERT INTO electric_products (img_drc, product_name, product_desc, product_price, pr_features, pr_usage, warranty) VALUES ('$filename', '$proname', '$prodesc', '$proprice', '$proftre', '$prousge', '$warranty')";
    // $data = mysqli_query($conn, $query);
// }


$query4 = "UPDATE approvedproducts_launch_table23
SET Product_Status='Launched'
WHERE Product_Test_Id='{$Product_Test_Id}' ";
$data4 = mysqli_query( $conn1, $query4 ) or die ( 'query Failed' );


// $parentDirectory = dirname($_SERVER['PHP_SELF']);

// if($data){
// echo "<script>
// alert('Data inserted into databse');
// </script>";
header("location:index.php");
// }
// else{
// echo "Failed";
// }


?>