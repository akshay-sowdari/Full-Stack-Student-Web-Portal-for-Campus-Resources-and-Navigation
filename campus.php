
<html>
<head>
	<style type="text/css">
		table{
 position: absolute;
 z-index: 2;
 left: 15%;
 top: 15%;
 border-collapse: collapse;
 border-spacing: 0;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 12px 12px 0 0;
 overflow: hidden;

}
	</style>

	<title>Student Deatils</title>
	 <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Campus Deatils</h1>
<table border="1">
	<tr>
		<th>campus_code</th>
		<th>campus_name</th>
		<th>location</th>
		<th>capacity</th>

	
	</tr>

</body>
</html>



<?php
	$connect=mysqli_connect("localhost","root","","enrolldata") or die("Connection Failed");
	$query="SELECT * from campus";
	$result=mysqli_query($connect,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		?>
		<tr>
			<td><?php echo $row['campus_code']?></td>
			<td><?php echo $row['campus_name']?></td>
			<td><?php echo $row['location']?></td>
			<td><?php echo $row['capacity']?></td>

		</tr>
		<?php
	}
?>