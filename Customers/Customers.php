<?php 
session_start();
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
<a href="../Home.php">Main menu</a>
<a href="..EmployeeMenuCodes/Employees.php">Employee Menu</a>
<p>If you wish to update or delete Customer records, first fill out the search form.</p>
<p>Then fill out the update form</p>
<form action="CustomerSearch.php" method="post">
<p>Enter The Comapany Name of the Customer you wish to find</p>
<input type="text" name="CompanyName" Placeholder="Company Name">
<button type="submit">Search</button>
<button type="reset">Clear</button>

</form>
<p>If you are adding a new Customer fill out this form below</p>
<form action="CustomerInsert.php" method="post">

<input type="text" name="CompanyNameIn" Placeholder="Company Name">
<input type="text" name="ContactNameIn" placeholder="Contact">
<input type="text" name="TitleIn" placeholder="Title">
<p>Abbreviate Your company name in all capital letters. Must be no more than five letters.</p><br>
<input type="text" name="CustomerIDIn" placeholder="ID">
<button type="submit">insert</button>
<button type="reset">Clear</button>
</form>
<p>Fill Out the Form Below to delete a customer record</p>
<form action="CustomersDelete.php" method="post">

<input type="text" name="CompanyNameDel" Placeholder="Company Name">

<button type="submit">Delete</button>
<button type="reset">Clear</button>
</form>



</body>
</html>
