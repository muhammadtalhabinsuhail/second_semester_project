<?php 
if(isset($_POST['sendcpri'])){
    $Product_Id = $_POST[ 'Product_Id' ];
    $Product_Test_Id= $_POST[ 'Product_Test_Id' ];
    $Product_Name = $_POST[ 'Product_Name' ];
    $Product_Category = $_POST[ 'Product_Category' ];
    $Product_Price = $_POST[ 'Product_Price' ];
    $Product_Report_Date = $_POST[ 'Product_Report_Date' ];
    $Product_Status = "Received by CPRI";
    $Product_Test_Type = $_POST[ 'Product_Test_Type' ];
    $Product_Description = $_POST[ 'Product_Description' ];


    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
    $query1 = "INSERT INTO CPRI_receiveproducts_table16 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data1 = mysqli_query( $conn, $query1 ) or die ( 'query Failed' );


    $query4 = "UPDATE products_sender_table3
    SET Product_Status='{$Product_Status}'
    WHERE Product_Test_Id='{$Product_Test_Id}' ";
    $data4 = mysqli_query( $conn, $query4 ) or die ( 'query Failed' );



    $query5 = "INSERT INTO tested_successfully_table13 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data5 = mysqli_query( $conn, $query5 ) or die ( 'query Failed' );





    $query3 = "DELETE FROM success_copy_table15 WHERE Product_Test_Id='{$Product_Test_Id}';";
    $data3 = mysqli_query( $conn, $query3 ) or die ( 'query Failed' );




header("location:successfully_showon_addproduct.php");

    
}
?>