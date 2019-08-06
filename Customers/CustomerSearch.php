<?php
session_start();
if(isset($_SESSION['UserName'])){
    if($_SESSION['UserName']==="User_CEO") {
        // do nothing
    } elseif ($_SESSION['UserName']==="User_Sales"){
        //do nothing as well
    } else {
        session_unset();
        session_destroy();
        header("location:../index.php?InvalidaccessAttempt");
    }
}
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
$sql = "select CompanyName, ContactName, ContactTitle 
from Customers where CompanyName ='$CompanyName'";


$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
    echo "Unable to retrieve info";
    die( print_r( sqlsrv_errors(), true));
}
$row = sqlsrv_fetch_array($stmt);
$row_count = count($row);
if ($row_count === 0){
    echo "No Results Found";
    echo "Return to main menu to add record.";
} else {
    echo "This comes up as : ".$row['CompanyName'].", you will contact: ".$row['ContactName']." Job Title:".$row['ContactTitle'] ."<br/>";
    echo "If you wish to update this please fill the form out below <br>";
}
sqlsrv_free_stmt( $stmt);
sqlsrv_close( $conn );
?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Customers</title>

</head>
<body>
<header>
<h1>Welcome to the Customer menu</h1>
</header>
<nav>
<a href="../Home.php">Main menu</a>
<a href="Customers.php">Customer Main menu</a>
<?php 
if(isset($_SESSION['UserName'])){
    if($_SESSION['UserName']==="User_CEO") {
        echo "<a href='../EmployeeMenuCodes/Employees.php'>Employee Menu</a>";
        echo "<a href='../Orders/Orders.php'>Order Menu</a>";
    }
    if($_SESSION['UserName']==="User_Sales"){
        echo "<a href='../Orders/Orders.php'>Order Menu</a>";
    }
}
?>
</nav>
<form action="CustomerUpdate.php" method="post">
<p>Enter The Comapany Name of the Customer you wish to update</p>
<input type="text" name="CompanyName" Placeholder="Company Name">
<input type="text" name="ContactName" placeholder="contact Person Name">
<input type="text" name="ContactTitle" placeholder="Title">
<button type="submit">Update</button>
<button type="reset">Clear</button>

</form>
</body>
</html>