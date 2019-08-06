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
<h1>Welcome to the HR menu</h1>
</header>
<a href="../Home.php">Main menu</a>
<p>If you wish to update employee records, first fill out the search form.</p>
<p>Then fill out the update form</p>
<form action="EmployeeSearch.php" method="post">
<p>Enter The first and last name of the employee you wish to find</p>
<input type="text" name="FirstName" Placeholder="First name">
<input type="text" name="LastName" placeholder="Last name">
<button type="submit">Search</button>
<button type="reset">Clear</button>

</form>
<p>If you are adding a new employee fill out this form below</p>
<form action="EmployeeInsert.php" method="post">

<input type="text" name="FName" Placeholder="First name">
<input type="text" name="LName" placeholder="Last name">
<button type="submit">insert</button>
<button type="reset">Clear</button>
</form>
<p>Fill Out the Form Below to delete an employee record</p>
<form action="DeleteEmployee.php" method="post">

<input type="text" name="DelFName" Placeholder="First name">
<input type="text" name="DelLName" placeholder="Last name">
<button type="submit">Delete Record</button>
<button type="reset">Clear</button>
</form>



</body>
</html>