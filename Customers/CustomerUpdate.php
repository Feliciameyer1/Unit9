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
$CompanyName =$_POST['CompanyName'];
$ContactName = $_POST['ContactName'];
$ContactTitle = $_POST['ContactTitle'];
$sql = "update Customers set CompanyName='$CompanyName', ContactName='$ContactName', ContactTitle='$ContactTitle'
 where CompanyName ='$CompanyName'";
$stmt = sqlsrv_query( $conn, $sql);

if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
} else{
    header("location: Customers.php?SucessUpdate");
}


sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn );
?>

