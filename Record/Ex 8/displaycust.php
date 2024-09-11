<?php
$cid = $_POST["cid"];
echo "<h1>Customer Details</h1><hr>";
echo "Customer ID: ".$cid;
$conn = new mysqli("localhost", "root", "", "bank");
$sql = "SELECT from customer where cust_id='$cid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo "Customer Name: ".$row["cust_name"];
?>