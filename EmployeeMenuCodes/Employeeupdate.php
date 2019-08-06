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
$Fname =$_POST['FirstName'];
$Lname = $_POST['LastName'];
$ID = $_POST['EmployeeID'];
$Address = $_POST['Address'];
$sql = "Update Employees set Address='$Address', FirstName='$Fname',LastName='$Lname' where EmployeeID=$ID";
$stmt = sqlsrv_query( $conn, $sql);

if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
} else{
    header("location: Employees.php?SucessUpdate");
}


sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn );
?>

