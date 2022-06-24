<?php include_once "connection.php";
echo $del_id=$_REQUEST['del_id'];
$Delete="DELETE FROM Registration WHERE id='$del_id'";
$query=mysqli_query($conn,$Delete);
if ($query) {
	header('location:form.php');
}
else {
	echo "Not deleted";
}

?>

