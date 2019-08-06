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
$CustID =$_POST['CustomerID'];
$OrderDate=$_POST['OrderDate'];

$sql = "delete Orders where CustomerID='$CustID' and OrderDate='$OrderDate'";



$stmt = sqlsrv_query( $conn, $sql);

header("location: Orders.php?Delete=Sucess");
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn );

?>
