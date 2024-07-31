<?php 
if(isset($_POST['successful'])){
    $Product_Id = $_POST[ 'Product_Id' ];
    $Product_Test_Id= $_POST[ 'Product_Test_Id' ];
    $Product_Name = $_POST[ 'Product_Name' ];
    $Product_Category = $_POST[ 'Product_Category' ];
    $Product_Price = $_POST[ 'Product_Price' ];
    $Product_Report_Date = $_POST[ 'Product_Report_Date' ];
    $Product_Status = "Successfully Tested";
    $Product_Test_Type = $_POST[ 'Product_Test_Type' ];
    $Product_Description = $_POST[ 'Product_Description' ];

    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
    $query1 = "INSERT INTO tested_successfully_table13 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data1 = mysqli_query( $conn, $query1 ) or die ( 'query Failed' );

    $query2 = "INSERT INTO success_copy_table15 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data2 = mysqli_query( $conn, $query2 ) or die ( 'query Failed' );
    
    $query3 = "DELETE FROM products_undertesting_table9 WHERE Product_Test_Id='{$Product_Test_Id}';";
    $data3 = mysqli_query( $conn, $query3 ) or die ( 'query Failed' );


    $query4 = "UPDATE products_sender_table3
    SET Product_Status='{$Product_Status}'
    WHERE Product_Test_Id='{$Product_Test_Id}' ";
    $data4 = mysqli_query( $conn, $query4 ) or die ( 'query Failed' );

    session_start();
    $_SESSION['sucessful']=true;




    
    header("location:successful_product_show.php");


    

}

if(isset($_POST['fail'])){
    $Product_Id = $_POST[ 'Product_Id' ];
    $Product_Test_Id= $_POST[ 'Product_Test_Id' ];
    $Product_Name = $_POST[ 'Product_Name' ];
    $Product_Category = $_POST[ 'Product_Category' ];
    $Product_Price = $_POST[ 'Product_Price' ];
    $Product_Report_Date = $_POST[ 'Product_Report_Date' ];
    $Product_Status = "Failed Tested";
    $Product_Test_Type = $_POST[ 'Product_Test_Type' ];
    $Product_Description = $_POST[ 'Product_Description' ];

    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
    $query1 = "INSERT INTO tested_failed_table10 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data1= mysqli_query( $conn, $query1 ) or die ( 'query Failed' );

    $query2 = "INSERT INTO failed_copy_table14 VALUES ('$Product_Id', '$Product_Test_Id', '$Product_Name', '$Product_Category', '$Product_Price' , '$Product_Status' ,'$Product_Report_Date' ,'$Product_Test_Type' ,'$Product_Description');";
    $data2 = mysqli_query( $conn, $query2 ) or die ( 'query Failed' );
    
    $query3 = "DELETE FROM products_undertesting_table9 WHERE Product_Test_Id='{$Product_Test_Id}';";
    $data3 = mysqli_query( $conn, $query3 ) or die ( 'query Failed' );


    $query4 = "UPDATE products_sender_table3
    SET Product_Status='{$Product_Status}'
    WHERE Product_Test_Id='{$Product_Test_Id}' ";
    $data4 = mysqli_query( $conn, $query4 ) or die ( 'query Failed' );


    session_start();
    $_SESSION['fail']=true;
    
    header("location:fail_product_show.php");
}


?>