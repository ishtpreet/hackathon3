<?php
include 'config.php';

$name	= $_POST['name'];
$email 	= $_POST['email'];
$phone 	= $_POST['contact'];
$team=$_POST['teamid'];
$college=$_POST['college'];
$f=false;
 $errMsg1=$errMsg2=$errMsg3=$errMsg4="";
 	if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
      {
	$errMsg1= "Only letters and white space allowed in name.";
    $f=	true;
     }
	 
	 if (!preg_match("/^[a-zA-Z ]*$/",$college)) 
      {
	$errMsg2= "Only letters and white space allowed in College name.";
    $f=	true;
     }
	  if(is_numeric($phone) == false)
  {
	  $errMsg3=  " Please enter only numeric values as Mobile number.";
       $f=true;
}
	 
if($f==true)
{  echo "<script>alert('$errMsg1$errMsg2$errMsg3');window.location ='index.html';</script>";
}
else
{
	
$sql = "select * from register";
$sql_query = mysql_query($sql);
$col2="";
while ($row = mysql_fetch_array($sql_query)) {
  $col1 = $row['id'];
  $col1=$col1+1;
$col2="UPESCSIHCK".$col1;}

$insert_registration=mysql_query("Insert into register(Sr_No,Name,Email_Id,teamid,college,contact) values('$col2','$name','$email','$team','$college','$phone')");
	if($insert_registration){
        echo "<script>alert('Your details are collected.You will recieve certificate on given email id within a week. ');window.location ='index.html';</script>";    }

}
    
?>