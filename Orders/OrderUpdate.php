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
$CustID =$_POST['CustomerID'];
$Date = $_POST['OrderDate'];
$Address = $_POST['ShippingAddress'];
$city=$_POST['ShipCity'];
$OrderID=$_POST['OrderID'];
$sql = "update Orders set customerID='$CustID', OrderDate = '$Date', ShipAddress='$Address', ShipCity='$city' where OrderID=$OrderID'";
$stmt = sqlsrv_query( $conn, $sql);

if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
} else{
    header("location: Orders.php?SucessUpdate");
}


sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn );
?>
