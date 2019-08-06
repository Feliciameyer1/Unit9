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
$Name =$_POST['NameDel'];

$sql = "delete from Products where ProductName='$Name'";



$stmt = sqlsrv_query( $conn, $sql);

header("location: Products.php?Delete=Sucess");
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn );

?>