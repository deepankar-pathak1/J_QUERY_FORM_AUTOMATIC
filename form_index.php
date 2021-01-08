<?php
$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn,'db');

extract($_POST);

if(isset($_POST['submit'])){
	$q = "insert into ajaxinsert (username,password) values('$username','$password')";

	$query = mysqli_query($conn,$q);
	header('location:index_2.html');
}
?>
