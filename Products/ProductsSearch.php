<?php

$serverName = "FELICIA-PC\\sqlexpress"; //serverName\instanceName
$connectionInfo = array( "Database"=>"Northwind" );
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    //do nothing
}else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}
$Name=$_POST['Name'];
$sql = "select ProductName, QuantityPerUnit,UnitPrice from Products where ProductName='$Name'";


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
    echo $row['ProductName']." comes in a ".$row['QuantityPerUnit']." for $".$row['UnitPrice']. "<br/>";
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
<h1>Welcome to the Product menu</h1>
</header>
<nav>
<a href="../Index.php">Main menu</a>
<a href="Products.php">Products Main Menu</a>
</nav>
<form action="ProductUpdate.php" method="post">
<p>Fill in the fields to update Product info</p>
<input type="text" name="Name" Placeholder="Product name">
<input type="text" name="UnitQuantity" placeholder="Unit Quantity">
<input type="text" name="Price" placeholder="Price">
<button type="submit">Update</button>
<button type="reset">Clear</button>
<br>


</form>

</body>
