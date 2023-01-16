
<html>
<head>

	<title>Student Deatils</title>
	 <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Course Deatils</h1>

<table border="1">
	<tr>
		<th>course id</th>
		<th>course name</th>
		<th>course duration</th>
		<th>credits</th>
		<th>instructor id</th>

	
	</tr>



</body>
</html>


<?php
	$connect=mysqli_connect("localhost","root","","enrolldata") or die("Connection Failed");
	$query="SELECT * from course";
	$result=mysqli_query($connect,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		?>
		<tr>
			<td><?php echo $row['course_id']?></td>
			<td><?php echo $row['course_name']?></td>
			<td><?php echo $row['course_duration']?></td>
			<td><?php echo $row['credits']?></td>
			<td><?php echo $row['instructorid']?></td>

	
		</tr>
		<?php
	}
?>