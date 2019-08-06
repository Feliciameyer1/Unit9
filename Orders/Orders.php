<?php 
session_start();
?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Product</title>

</head>
<body>
<header>
<h1>Welcome to the Order Menu</h1>
</header>
<a href="../Home.php">Main menu</a>
<p>If you wish to update product records, first fill out the search form.</p>
<p>Then fill out the update form</p>
<form action="OrderSearch.php" method="post">
<p> Fill out this form to search for a specific order</p>
<input type="text" name="CustomerID" Placeholder="Customer ID">
<input type="Date" name="OrderDate" Placeholder="Order date">
<button type="submit">Search</button>
<button type="reset">Clear</button>

</form>
<p>To add a new order fill out this form below</p>
<form action="OrderInsert.php" method="post">
<input type="text" name="CustomerID" Placeholder="Customer ID">
<input type="Date" name="OrderDate" placeholder="Order Date">
<input type="text" name="Address" placeholder="Shipping Address">
<input type="text" name="City" Placeholder="Shipping City">
<button type="submit">insert</button>
<button type="reset">Clear</button>
</form>
<p>Fill Out the Form Below to delete an Order record</p>
<form action="OrdersDelete.php" method="post">

<input type="text" name="CustomerID" Placeholder="CustomerID">
<input type="Date" name="OrderDate" Placeholder="Order Date">
<button type="submit">delete</button>
<button type="reset">Clear</button>
</form>



</body>
</html>