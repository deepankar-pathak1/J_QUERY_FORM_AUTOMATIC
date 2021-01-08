

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

?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<title></title>
</head>
<body>
	<div class="container">
		
<h2 class="text-center text-danger">Data From Data base</h2>

<form>
	UserName :<input type="text" name="" class="form-control"><br>
	Password :<input type="text" name="" class="form-control"><br>
	Degree : <select class="form-control" onchange="myfun(this.value)">
		<option>Select Any one</option>

		<?php 
		$q = "select * from degree";
		$result = mysqli_query($conn,$q);
		while($rows = mysqli_fetch_array($result))
		{
			?>
			<option value=" <?php echo($rows['m_id']); ?>"> <?php echo($rows['degree']); ?></option>

			<?php
		}


		 ?>
		
	</select><br>

	Class:<select class="form-control" id="dataget">
		<option>Choose any one</option>
		
	</select>

	<br><br>
	<button class="btn btn-primary">Submit</button>

</form>

	</div>

	<script type="text/javascript">
		function myfun(datavalue){
			$.ajax({
				url: 'class_1.php',
				type: 'POST',
				data:{datapost:datavalue},

				success: function(result){
					$('#dataget').html(result);
				}


			});
		}
	</script>

</body>
</html>>
