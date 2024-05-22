<?php 
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<h1>Welcome to the Order Managemnt System</h1>
<a href="orders.php">View Orders</a><br>
<a href="add_order.php">Add Order</a><br>
<a href="logout.php">Logout</a>



