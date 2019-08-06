<?php
if (isset($_POST['Login'])){
    $username=$_POST['UID'];
    $password=$_POST['Password'];
    if(empty($username) || empty($password)){
        header("location:../index.php?error=emptyfields");
        exit();
    } else{
        
    }
    $serverName = "FELICIA-PC\\sqlexpress"; //serverName\instanceName
    $connectionInfo = array( "Database"=>"Northwind","UID"=>"$username", "PWD"=>"$password" );
    

    $conn = sqlsrv_connect( $serverName, $connectionInfo);
  
    
    if( $conn ) {
        session_start();
        $_SESSION['UserName']=$username;
         header("location:../Home.php");
    }else{
       
        header("location:../index.php?ConnectionFailed");
       
            }
} else {
    header("location:../index.php");
    exit();
}