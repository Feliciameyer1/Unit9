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
$Fname =$_POST['FirstName'];
$Lname = $_POST['LastName'];
    $sql = "Select EmployeeID,LastName,FirstName 
from Employees 
where FirstName='$Fname' and LastName='$Lname';";
    
    
    $stmt = sqlsrv_query( $conn, $sql);
    if( $stmt === false ) {
        echo "Unable to retrieve info";
        die( print_r( sqlsrv_errors(), true));
    }
   
    $row = sqlsrv_fetch_array($stmt);
    $row_count = count($row);
    
    if ($row_count === 0){
        echo "No Records found. Return to the main menu to add new record";
    }
    else {
        echo "This comes up as : ".$row['LastName'].", ".$row['FirstName']." Employee ID number:".$row['EmployeeID'] ."<br/>";
    echo "If you wish to update this please fill the form out below <br>";
    }
    sqlsrv_free_stmt( $stmt);
    sqlsrv_close( $conn );
?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Employees search result</title>
</head>
<body>
<header>
<h1>Welcome to the HR menu</h1>
</header>
<nav>
<a href="../Home.php">Main menu</a>
<a href="Employees.php">HR Main Menu</a>
</nav>
<form action="Employeeupdate.php" method="post">
<p>Fill in the fields to update Employee info</p>
<input type="text" name="FirstName" Placeholder="First name">
<input type="text" name="LastName" placeholder="Last name">
<input type="text" name="EmployeeID" placeholder="ID number">
<input type="text" name="Address" placeholder="Street Address">
<button type="submit">Update</button>
<button type="reset">Clear</button>
<br>


</form>

</body>
</html>