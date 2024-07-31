<?php 
if(isset($_POST['manufactured_products_show'])){
    $Product_Id=$_POST['Product_Id'];
    $Manufactured_Date= $_POST[ 'Manufactured_Date' ];
    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );
    $query = "SELECT * FROM manufactured_products_table2 WHERE Product_Id='{$Product_Id}' ";
    $data = mysqli_query( $conn, $query ) or die ( 'query Failed' );

    if ( mysqli_num_rows( $data ) > 0 ){
        while( $rows = mysqli_fetch_assoc( $data ) ) {
             $Product_Name= $rows[ 'Product_Name' ];
              $Product_Category= $rows[ 'Product_Category' ];
               $Product_Price= $rows[ 'Product_Price' ];
               $Product_Status= "In Process";
                 $Product_Description= $rows[ 'Product_Description' ];
               
            
        }
        $query1 = "INSERT INTO in_process_table1 VALUES ('{$Product_Id}','{$Product_Name}','{$Product_Category}','{$Product_Price}','{$Product_Status}','{$Manufactured_Date}','{$Product_Description}')";
        $data1 = mysqli_query( $conn, $query1 ) or die ( 'query Failed' );
        

        $query2 = "DELETE FROM manufactured_products_table2 WHERE Product_Id='{$Product_Id}';";
        $data2 = mysqli_query( $conn, $query2 ) or die ( 'query Failed' );
        
        
    }
    header("location:inprocess_products.php");
}
?>