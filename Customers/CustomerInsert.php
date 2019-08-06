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

$CompanyName=$_POST['CompanyNameIn'];
$Contact = $_POST['ContactNameIn'];
$ContactTitle=$_POST['TitleIn'];
$ID= $_POST['CustomerIDIn'];

$sql = "insert into Customers(CustomerID, CompanyName,ContactName,ContactTitle) values('$ID','$CompanyName','$Contact','$ContactTitle')";



$stmt = sqlsrv_query( $conn, $sql);

sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn );
header("Location: Customers.php?sucessInsert");
?>
