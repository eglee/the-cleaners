<?php
header("Location:thanks.html");
//redirect to thank you page upon form submission
$objConnect = mysql_connect("localhost","user_db","user_password") or die(mysql_error());  
$objDB = mysql_select_db("user_db");
//connect to database

$year = $_POST["year"];
$month = $_POST["month"];
$day = $_POST["day"];
//divides dropdown menu into year, month, day

mysql_query("UPDATE date SET Booked = '1'
WHERE Date = '".$day."'");
//updates Date table to reflect passed date from dropdown menu is booked

$date = $year . "-" . $month . "-" . $day;
//concatenate year, month, and day into acceptable date format to be inserted into customer table

$strSQL = "INSERT INTO customer ";  
$strSQL .="(Name,Email,Phone,Street,City,State,Zip,Date,Time,Card,CardNumber,CardCode,CardName,Bundle) ";  
$strSQL .="VALUES ";  
$strSQL .="('".$_POST["name"]."','".$_POST["email"]."','".$_POST["phone"]."' ";  
$strSQL .=",'".$_POST["street"]."','".$_POST["city"]."','".$_POST["state"]."' ";
$strSQL .=",'".$_POST["zip"]."','".$date."','".$_POST["time"]."','".$_POST["cardtype"]."' ";
$strSQL .=",'".$_POST["cardnumber"]."','".$_POST["secure"]."','".$_POST["namecard"]."','".$_POST["bundle"]."' ) ";


$objQuery = mysql_query($strSQL);  

if($objQuery)  
{  
echo "Save completed.";  
}  
else  
{  
echo "Error Save [".$strSQL."]";  
}  
mysql_close($objConnect); 

?>  