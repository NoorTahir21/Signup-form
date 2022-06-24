<?php
$dbname='students_form';
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($conn) {
	echo "Connected.<br>";
}
else {
	echo "Connection failed.<br>";
}
 ?>
