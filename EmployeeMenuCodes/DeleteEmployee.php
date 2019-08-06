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
$Fname =$_POST['DelFName'];
$Lname = $_POST['DelLName'];
$sql = "delete from Employees where LastName='$Lname'and FirstName='$Fname'";



$stmt = sqlsrv_query( $conn, $sql);

header("location: Employees.php?Delete=Sucess");
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn );

?>