<?php 
if(isset($_POST['reprocessed'])){
    $Product_Test_Id=$_POST['Product_Test_Id'];

 
    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
    $Product_Test_Id=$_POST['Product_Test_Id'];
$Product_Status="Remanufactured";
$currentDate = date('Y-m-d');

$query = "SELECT * FROM reprocess_failedproducts_table11 WHERE Product_Test_Id='{$Product_Test_Id}';";
$data = mysqli_query( $conn, $query ) or die ( 'query Failed' );
if ( mysqli_num_rows( $data ) > 0 ){
    while( $rows = mysqli_fetch_assoc( $data ) ) {
        $Product_Id=$rows[ 'Product_Id' ];
         $Product_Name= $rows[ 'Product_Name' ];
          $Product_Category= $rows[ 'Product_Category' ];
           $Product_Price= $rows[ 'Product_Price' ];
             $Product_Description= $rows[ 'Product_Description' ];
             $Product_Test_Type=$rows['Product_Test_Type'];
        
    }


}

    
    $query1 = "INSERT INTO remanufactured_faliedproducts_table12 VALUES ('{$Product_Id}','{$Product_Test_Id}','{$Product_Name}','{$Product_Category}','{$Product_Price}','{$Product_Status}','{$currentDate}','{$Product_Test_Type}','{$Product_Description}');";
    $data1 = mysqli_query( $conn, $query1 ) or die ( 'query Failed' );

    
    $query4 = "UPDATE products_sender_table3
    SET Product_Status='{$Product_Status}'
    WHERE Product_Test_Id='{$Product_Test_Id}' ";
    $data4 = mysqli_query( $conn, $query4 ) or die ( 'query Failed' );


    

    $query3 = "DELETE FROM reprocess_failedproducts_table11 WHERE Product_Test_Id='{$Product_Test_Id}';";
    $data3 = mysqli_query( $conn, $query3 ) or die ( 'query Failed' );




    header( 'Location: remanufactured_show.php' );
    mysqli_close( $conn );
    }
    ?>