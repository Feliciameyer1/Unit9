<?php
session_start();
if(isset($_SESSION['UserName'])){
    if($_SESSION['UserName']==="User_CEO") {
        // do nothing
    } elseif ($_SESSION['UserName']==="User_Sales"){
        //do nothing as well
    } else {
        session_unset();
        session_destroy();
        header("location:../index.php?InvalidaccessAttempt");
    }
}
$serverName = "FELICIA-PC\\sqlexpress"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Northwind" );
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    //do nothing
}else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}
$CustID=$_POST['CustomerID'];
$OrderDate=$_POST['OrderDate'];
$sql = "select OrderID,CompanyName,OrderDate,ShipAddress,ShipCity from Orders 
left join Customers on Orders.CustomerID=Customers.CustomerID 
where CustomerID='$CustID'and OrderDate='$OrderDate'";


$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
    echo "Unable to retrieve info";
    die( print_r( sqlsrv_errors(), true));
}
$row = sqlsrv_fetch_array($stmt);
$row_count = count($row);
if ($row_count === 0){
    echo "No Results Found. ";
    echo "Return to main menu to add record.";
} else {
    echo $row_count." order found: OrderNumber ".$row['OrderID']." For ".$row['CompanyName'].
    " is being shipped to ".$row['ShipAddress'].", ".$row['ShipCity']. "<br/>";
    echo "If you wish to update this please fill the form out below <br>";
}
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn );
?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Product</title>
</head>
<body>
<header>
<h1>Welcome to the Order menu</h1>
</header>
<nav>
<a href="../Index.php">Main menu</a>
<a href="Orders.php">Orders Main Menu</a>
</nav>
<form action="OrderUpdate.php" method="post">
<p>Fill in the fields to update Product info</p>
<input type="text" name="CustomerID" Placeholder="Customer ID">
<input type="Date" name="OrderDate" placeholder="Unit Quantity">
<input type="text" name="ShippingAddress" placeholder="Address">
<input type="text" name="ShipCity" placeholder="City">
<input type="text" name="OrderID" placeholder="Order ID">
<button type="submit">Update</button>
<button type="reset">Clear</button>
<br>


</form>

</body>
