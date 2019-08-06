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
<title>Customers</title>

</head>
<body>
<header>
<h1>Welcome to the Customer menu</h1>
</header>
<a href="../Home.php">Main menu</a>
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
<script type="text/javascript">
function ValidateSearch(){
   var CompanyName= document.forms["Search"]["CompanyName"];
   var RegExpression = /^[a-zA-Z\s]*$/;  
   if (CompanyName.value == "")                                  
   { 
       window.alert("Please enter a name"); 
       name.focus(); 
       return false; 
   } 
   if(CompanyName.value.match(RegExpression)){
	   return true;
   } else {
window.alert("Invalid input recieved for name. Must only use letters and white spaces");
name.focus();
return false;
   }
}	   

function ValidateInsert(){
	var CompanyName=document.forms["Insert"]["CompanyName"];
	var ContactName=document.forms["Insert"]["ContactName"];
	var Title=document.forms["Insert"]["Title"];
	var CompanyID=document.forms["Insert"]["ID"];
	   var RegExpression = /^[a-zA-Z\s]*$/;  
	   if (CompanyName.value == "")                                  
	   { 
	       window.alert("Please enter a name"); 
	       name.focus(); 
	       return false; 
	   } 
	   if(CompanyName.value.match(RegExpression){
		   return true;
	   } else {
	window.alert("Invalid input recieved for name. Must only use letters and white spaces");
	name.focus();
	return false;
	   }
	   if (ContactName.value == "")                                  
	   { 
	       window.alert("Please enter a name"); 
	       name.focus(); 
	       return false; 
	   }
	   if(ContactName.value.match(RegExpression){
		   return true;
	   } else {
	window.alert("Invalid input recieved for name. Must only use letters and white spaces");
	name.focus();
	return false;
	   }
	   if (Title.value == "")                                  
	   { 
	       window.alert("Please enter a name"); 
	       name.focus(); 
	       return false; 
	   }
	   if(Title.value.match(RegExpression){
		   return true;
	   } else {
	window.alert("Title must consist of letters and spaces only");
	name.focus();
	return false;
	   }

	   if (CumpanyID.value == "")                                  
	   { 
	       window.alert("Please enter a name"); 
	       name.focus(); 
	       return false; 
	   }
	   if(ComapnyID.value.match(RegExpression){
		   return true;
	   } else {
	window.alert("ID must be letters only");
	name.focus();
	return false;
	   } 	   
	
function ValidateDelete(){
	   var CompanyName= document.forms["Delete"]["CustomerName"];
	   var RegExpression = /^[a-zA-Z\s]*$/;  
	   if (CompanyName.value == "")                                  
	   { 
	       window.alert("Please enter a name"); 
	       name.focus(); 
	       return false; 
	   } 
	   if(CompanyName.value.match(RegExpression){
		   return true;
	   } else {
	window.alert("Invalid input recieved for name. Must only use letters and white spaces");
	name.focus();
	return false;
	   }	   
	}


</script>

<p>If you wish to update or delete Customer records, first fill out the search form.</p>
<p>Then fill out the update form</p>
<form Name="Search" action="CustomerSearch.php" method="post" Onsubmit="return ValidateSearch()">
<p>Enter The Comapany Name of the Customer you wish to find</p>
<input type="text" name="CompanyName" ID="CompanyName" Placeholder="Company Name">
<button type="submit">Search</button>
<button type="reset">Clear</button>

</form>
<p>If you are adding a new Customer fill out this form below</p>
<form name="insert" action="CustomerInsert.php" method="post" onsubmit="return ValidateInsert()">

<input type="text" name="CompanyNameIn" ID="CompanyName" Placeholder="Company Name">
<input type="text" name="ContactNameIn" ID="Contact" placeholder="Contact">
<input type="text" name="TitleIn" ID="Title" placeholder="Title">
<p>Abbreviate Your company name in all capital letters. Must be no more than five letters.</p><br>
<input type="text" name="CustomerIDIn" ID="ID" placeholder="ID">
<button type="submit">insert</button>
<button type="reset">Clear</button>
</form>
<p>Fill Out the Form Below to delete a customer record</p>
<form name="Delete" action="CustomersDelete.php" method="post" onsubmit="return ValidateDelete()">

<input type="text" name="CompanyNameDel" ID="CustomerName" Placeholder="Company Name">

<button type="submit">Delete</button>
<button type="reset">Clear</button>
</form>



</body>
</html>
