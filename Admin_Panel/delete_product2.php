<?php

if ( isset( $_POST[ 'delete' ] ) ) {
    $Product_Id = $_POST[ 'Product_Id' ];

    $conn = mysqli_connect( 'localhost', 'root', '', 'Project_Database' ) or die( 'connection failed' );

    // Use prepared statement to avoid SQL injection
    $query = 'DELETE FROM manufactured_products_table2 WHERE Product_Id = ?';
    $stmt = mysqli_prepare( $conn, $query );

    // Bind the parameter with the correct type 's' for string
    mysqli_stmt_bind_param( $stmt, 's', $Product_Id );

    // Execute the query
    mysqli_stmt_execute( $stmt );

    // Close the statement
    mysqli_stmt_close( $stmt );

    // Close the connection
    mysqli_close( $conn );

    header( 'Location: view_product2.php' );
    exit();
    // Ensure that script stops execution after redirection
}
?>