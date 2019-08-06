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

$Name=$_POST['NameIn'];
$Quantity = $_POST['UnitQuantityIn'];
$Price = $_POST['PriceIn'];
$sql = "Insert into Products(ProductName, QuantityPerUnit, UnitPrice) values('$Name','$Quantity',$Price)";



$stmt = sqlsrv_query( $conn, $sql);

sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn );
header("Location: Products.php?sucessInsert");
?>
