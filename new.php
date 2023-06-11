<?php

$n=$_POST['card'];
$b=$_POST['expiry'];
$c=$_POST['cvv'];
$d=$_POST['name'];



$con=new mysqli("localhost","root","","paygo");
$sql="INSERT INTO pay(card,date,cvv,name) values('$n','$b','$c','$d')";

$r=mysqli_query($con,$sql);
if($r)
{
	echo "Sucess..............";
}
else {
	
	echo "Not Update";
}

?>