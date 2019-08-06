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
$Name =$_POST['Name'];
$Quantity = $_POST['UnitQuantity'];
$Price = $_POST['Price'];
$sql = "Update Products set ProductName='$Name', QuantityPerUnit='$Quantity', UnitPrice=$Price where ProductName='$Name'";
$stmt = sqlsrv_query( $conn, $sql);

if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
} else{
    header("location: Products.php?SucessUpdate");
}


sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn );
?>