<?php
session_start();
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
$OrderDate = $_POST['OrderDate'];
$ShipAddress = $_POST['Address'];
$ShipCity=$_POST['City'];
$sql = "insert into Orders( CustomerID, OrderDate, ShipAddress, ShipCity) values('$CustID','$OrderDate', '$ShipAddress', '$ShipCity')";



$stmt = sqlsrv_query( $conn, $sql);

sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn );
header("Location: Orders.php?sucessInsert");
?>
