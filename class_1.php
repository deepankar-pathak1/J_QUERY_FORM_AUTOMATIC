<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
	die("connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn,'db');

$nameid = $_POST['datapost'];

$q = "select * from class where m_id='$nameid' ";
$result = mysqli_query($conn,$q);


while($rows = mysqli_fetch_array($result))
		{
			?>
			<option> <?php echo($rows['class_']); ?></option>

			<?php
		}


		 ?>




