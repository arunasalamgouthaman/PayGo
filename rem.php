<?php

$n=$_POST['event'];
$b=$_POST['date1'];
$c=$_POST['bilname'];
$d=$_POST['date2'];
$f=$_POST['comment'];



$con=new mysqli("localhost","root","","paygo");
$sql="INSERT INTO reminder(name,eventdate,billname,billduedate,description) values('$n','$b','$c','$d','$f')";

$r=mysqli_query($con,$sql);
if($r)
{
	echo "Sucess..............";
}
else {
	
	echo "Not Update";
}

?>