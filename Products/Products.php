
<html>
<head>
<meta charset="ISO-8859-1">
<title>Product</title>

</head>
<body>
<header>
<h1>Welcome to the Product Menu</h1>
</header>
<a href="../Home.php">Main menu</a>
<p>If you wish to update product records, first fill out the search form.</p>
<p>Then fill out the update form</p>
<form action="ProductsSearch.php" method="post">
<p> Enter in the Product Name to search for it</p>
<input type="text" name="Name" Placeholder="Name">

<button type="submit">Search</button>
<button type="reset">Clear</button>

</form>
<p>If you are adding a new product fill out this form below</p>
<form action="ProductsInsert.php" method="post">
<input type="text" name="NameIn" Placeholder="Name">
<input type="text" name="UnitQuantityIn" placeholder="Unit Quantity">
<input type="text" name="PriceIn" placeholder="Price">
<button type="submit">insert</button>
<button type="reset">Clear</button>
</form>
<p>Fill Out the Form Below to delete a Product record</p>
<form action="ProductsDelete.php" method="post">

<input type="text" name="NameDel" Placeholder="Name">
<button type="submit">delete</button>
<button type="reset">Clear</button>
</form>



</body>
</html>