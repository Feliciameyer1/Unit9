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
$Fname =$_POST['FName'];
$Lname = $_POST['LName'];

$sql = "Insert into Employees(LastName,FirstName) Values('$Lname','$Fname')";



$stmt = sqlsrv_query( $conn, $sql);

sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn );
header("location: Employees.php?InsertSucess");
?>

