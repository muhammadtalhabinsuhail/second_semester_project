<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST[ 'receive_declinedproducts' ] ))
{
    $Product_Test_Id=$_POST["Product_Test_Id"];
    
    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );


   

    $query1="UPDATE products_sender_table3 SET Product_Status = 'Declined For Testing' WHERE Product_Test_Id='{$Product_Test_Id}';";
$data1=mysqli_query($conn,$query1) or die ( 'query Failed' );

$query2=" DELETE FROM decline_reasoncopy_table6 WHERE Product_Test_Id = '{$Product_Test_Id}';";
$data2=mysqli_query($conn,$query2) or die ( 'query Failed' );




header("location:declinedproducts_addproductpanel.php");
    

    }









    

?>