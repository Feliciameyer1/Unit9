<?php 
session_start();
if(isset($_SESSION['UserName'])){
    if($_SESSION['UserName']==="User_CEO") {
        // do nothing
    } elseif ($_SESSION['UserName']==="User_HR"){
        //do nothing as well
    } else {
        session_unset();
        session_destroy();
        header("location:../index.php?InvalidaccessAttempt");
    }
}
?>
<script>
function ValidateSearch(){
	   var Fname= document.forms["Search"]["FirstName"];
	   var Lname= document.forms["Search"]["LastName"];
	   var RegExpression = /^[a-zA-Z\s]*$/;  
	   if (Fname.value == "")                                  
	   { 
	       window.alert("Please enter a name"); 
	       name.focus(); 
	       return false; 
	   } 
	   if(Fname.value.match(RegExpression)){
		   return true;
	   } else {
	window.alert("Invalid input recieved for name. Must only letters");
	name.focus();
	return false;
	   }
	   if (Lname.value == "")                                  
	   { 
	       window.alert("Please enter a name"); 
	       name.focus(); 
	       return false; 
	   } 
	   if(Lname.value.match(RegExpression)){
		   return true;
	   } else {
	window.alert("Invalid input recieved for name. Must only use letters.");
	name.focus();
	return false;
	   }
	   	   
	}

function ValidateInsert(){
	 var Fname= document.forms["Insert"]["FName"];
	   var Lname= document.forms["Insert"]["LName"];
	   var RegExpression = /^[a-zA-Z\s]*$/;  
	   if (Fname.value == "")                                  
	   { 
	       window.alert("Please enter a name"); 
	       name.focus(); 
	       return false; 
	   } 
	   if(Fname.value.match(RegExpression){
		   return true;
	   } else {
	window.alert("Invalid input recieved for name. Must only letters");
	name.focus();
	return false;
	   }
	   if (Lname.value == "")                                  
	   { 
	       window.alert("Please enter a name"); 
	       name.focus(); 
	       return false; 
	   } 
	   if(Lname.value.match(RegExpression){
		   return true;
	   } else {
	window.alert("Invalid input recieved for name. Must only use letters.");
	name.focus();
	return false;
	   }
	   	  
}

function ValidateDelete(){
	var Fname= document.forms["Delete"]["DELFName"];
	   var Lname= document.forms["Delete"]["DELLName"];
	   var RegExpression = /^[a-zA-Z\s]*$/;  
	   if (Fname.value == "")                                  
	   { 
	       window.alert("Please enter a name"); 
	       name.focus(); 
	       return false; 
	   } 
	   if(Fname.value.match(RegExpression){
		   return true;
	   } else {
	window.alert("Invalid input recieved for name. Must only letters");
	name.focus();
	return false;
	   }
	   if (Lname.value == "")                                  
	   { 
	       window.alert("Please enter a name"); 
	       name.focus(); 
	       return false; 
	   } 
	   if(Lname.value.match(RegExpression){
		   return true;
	   } else {
	window.alert("Invalid input recieved for name. Must only use letters.");
	name.focus();
	return false;
	   }
}


</script>

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
<form name="Search" action="EmployeeSearch.php" method="post" onsubmit="return ValidateSearch()">
<p>Enter The first and last name of the employee you wish to find</p>
<input type="text" name="FirstName" Placeholder="First name">
<input type="text" name="LastName" placeholder="Last name">
<button type="submit">Search</button>
<button type="reset">Clear</button>

</form>
<p>If you are adding a new employee fill out this form below</p>
<form name="Insert" action="EmployeeInsert.php" method="post" onsubmit="return ValidateInsert()">

<input type="text" name="FName"  Placeholder="First name">
<input type="text" name="LName" placeholder="Last name">
<button type="submit">insert</button>
<button type="reset">Clear</button>
</form>
<p>Fill Out the Form Below to delete an employee record</p>
<form name="Delete" action="DeleteEmployee.php" method="post" onsubmit="return ValidateDelete()">

<input type="text" name="DelFName" Placeholder="First name">
<input type="text" name="DelLName" placeholder="Last name">
<button type="submit">Delete Record</button>
<button type="reset">Clear</button>
</form>



</body>
</html>