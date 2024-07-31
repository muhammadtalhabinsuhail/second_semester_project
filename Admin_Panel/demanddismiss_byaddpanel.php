<?php 
if(isset($_POST['demanddismiss'])){
$Product_Test_Id=$_POST['Product_Test_Id'];
$conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );





$query3 = "DELETE FROM CPRI_demandfortest_table24 WHERE Product_Test_Id='{$Product_Test_Id}';";
$data3 = mysqli_query( $conn, $query3 ) or die ( 'query Failed' );

header("location:demand_cpri_addpanel.php");










    
}


?>