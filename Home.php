<?php 
session_start();
?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Employees</title>

</head>
<body>
<header>
<h1>Welcome</h1>
</header>
<nav>
<?php 
if(isset($_SESSION['UserName'])){
    if($_SESSION['UserName']==="User_HR"){
        echo "<a href='EmployeeMenuCodes/Employees.php'>Employee Menu</a>";
    }
    if($_SESSION['UserName']==="User_CEO"){
        echo "<a href='EmployeeMenuCodes/Employees.php'>Employee Menu</a>";
        echo "<a href='Customers/Customers.php'>Customer Menu</a>";
        echo "<a href='Orders/Orders.php'>Order Menu</a>";
    }
    if($_SESSION['UserName']==="User_Sales"){
       echo "<a href='Customers/Customers.php'>Customer Menu</a>";
        echo "<a href='Orders/Orders.php'>Order Menu</a>";
    }




}
?>
<form action="LogScripts/LogOut.php">
<button type="submit" name="LogOut">Log out</button>
</form>
</nav>
<p>Welcome to IT481 Web application. Click on the links to get started.</p>

</body>
</html>
