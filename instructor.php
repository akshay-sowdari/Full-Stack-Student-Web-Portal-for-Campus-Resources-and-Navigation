
<html>
<head>

	<title>Student Deatils</title>
	 <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Instructor Deatils</h1>
<table border="1">
	<tr>
		<th>instructor id</th>
		<th>name</th>
		<th>age</th>
		<th>gender</th>
		<th>department</th>
		
		
	
	</tr>


</body>
</html>


<?php
	$connect=mysqli_connect("localhost","root","","enrolldata") or die("Connection Failed");
	$query="SELECT * from instructor";
	$result=mysqli_query($connect,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		?>
		<tr>
			<td><?php echo $row['instructor_id']?></td>
			<td><?php echo $row['name']?></td>
			<td><?php echo $row['age']?></td>
			<td><?php echo $row['gender']?></td>
			<td><?php echo $row['department']?></td>
		</tr>
		<?php
	}
?>