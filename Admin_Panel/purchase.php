<?php
session_start();
 $conn=mysqli_connect("localhost","root","","company"); 
if(mysqli_connect_error())
{echo"<script> alert('cannot connect to database');
 window.location.href='mycart.php'; </script>"; 
} 

if($_SERVER["REQUEST_METHOD"]="post") { 
if(isset($_POST['purchase'])) {
$query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[Full_name]','$_POST[Phone_No]','$_POST[Address]','$_POST[COD]')";
if(mysqli_query($conn,$query1)) { 
    $Order_Id=mysqli_insert_id($conn); 
    $query2="INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES ('?','?','?','?') ";
    $stmt=mysqli_prepare($conn,$query2);
     if($stmt) {
    //   mysqli_stmt_bind_param($stmt, 'isii', $Order_Id, $Item_Name, $Price, $Quantity);

            foreach($_SESSION['cart'] as $key => $values) {
      $Item_Name=$values['Item_Name'];
      $Price=$values['Price'];
        $Quantity=$values['Quantity'];
        mysqli_stmt_execute($stmt); 
            }
    //   unset($SESSION['cart']);
    }
 echo"<script> alert('Order Placed');
  window.location.href-'index.php';
   </script>"; 
  }
   else{ echo"<script> alert( 'SQL Query Prepare Error');
    window.location.href='mycart.php'; 
</script>";
} 
}
else { 
    echo"<script> alert('SQL Error');
     window.location.href-'mycart.php'; </script>"; 
    } 
} 

?>