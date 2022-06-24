<?php 
include_once "connection.php"?>
<?php
if (isset($_POST['formsubmit'])) {
	$fname=$_POST['userfname'];
	$lname=$_POST['userlname'];
	echo $CNIC=$_POST['usercnic'];
	$email=$_POST['useremail'];
	$password=$_POST['userpass'];
	$pass=password_hash($password, PASSWORD_DEFAULT);
	$gender=$_POST['gender'];
	$INSERT="INSERT INTO registration(user_cnic,user_fname,user_lname,user_email,user_gender,user_pass)VALUES('$CNIC','$fname','$lname','$email','$gender','$pass')";
	$query=mysqli_query($conn,$INSERT);
	if ($query) {
		echo "OK Data submitted";
		header('location:form.php');
	}
	else 
	{
		echo mysqli_error($conn);
	}
}
if (isset($_REQUEST['formupdate'])) {
	$fname=$_POST['userfname'];
	$lname=$_POST['userlname'];
	$email=$_POST['useremail'];
	$id=$_POST['id'];
	$update = "UPDATE `Registration` SET `user_fname`='$fname',`user_lname`='$lname', `user_email`='$email' WHERE id= '$id'";
	$query=mysqli_query($conn,$update);
	if ($query) {
		header('location:form.php');
		echo "Ok updated";
	}
	else {
		echo "Not updated";
	}
}
?>