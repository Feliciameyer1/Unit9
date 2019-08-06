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
<form Name="Search" action="OrderSearch.php" method="post" onsubmit="return ValidateSearch()">
<p> Fill out this form to search for a specific order</p>
<input type="text" name="CustomerID" Placeholder="Customer ID">
<input type="Date" name="OrderDate" Placeholder="Order date">
<button type="submit">Search</button>
<button type="reset">Clear</button>

</form>
<p>To add a new order fill out this form below</p>
<form name="Insert" action="OrderInsert.php" method="post" onsubmit="return ValidateInsert()">
<input type="text" name="CustomerID" Placeholder="Customer ID">
<input type="Date" name="OrderDate" placeholder="Order Date">
<input type="text" name="Address" placeholder="Shipping Address">
<input type="text" name="City" Placeholder="Shipping City">
<button type="submit">insert</button>
<button type="reset">Clear</button>
</form>
<p>Fill Out the Form Below to delete an Order record</p>
<form name="Delete" action="OrdersDelete.php" method="post" onsubmit="return ValidateDelete()">

<input type="text" name="CustomerID" Placeholder="CustomerID">
<input type="Date" name="OrderDate" Placeholder="Order Date">
<button type="submit">delete</button>
<button type="reset">Clear</button>
</form>



</body>
</html>