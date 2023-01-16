
<html>
<head>
	<style type="text/css">
		body{
background: rgb(233,76,161);
background: -moz-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
background: -webkit-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
background: linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#e94ca1",endColorstr="#c74ae9",GradientType=1);
opacity: .9999;
}

table{
 position: absolute;
 z-index: 2;
 left: 13%;
 top: 15%;
 border-collapse: collapse;
 border-spacing: 0;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 12px 12px 0 0;
 overflow: hidden;

}

td , th{
    border: none;
 padding: 15px 20px;
 text-align: center;
 

}
th{
 background-color: #ba68c8;
 color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 200;
 text-transform: uppercase;

}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
}
tr:nth-child(even){
 background-color: #eeeeee;
}

h1 {  color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 200; font-size: 30px; 
   line-height: 72px; margin: 0 0 24px; text-align: center; text-transform: uppercase; }

	</style>

	<title>Student Deatils</title>

</head>
<body>

<H1>Student Deatils</H1>

<table border="1">
	<tr>
		<th>student id</th>
		<th>first name</th>
		<th>last name</th>
		<th>gender</th>
		<th>age</th>
		<th>Mail ID</th>
		<th>Campus Code</th>
		<th>Course id</th>
		
	
	</tr>



</body>
</html>


<?php
	$connect=mysqli_connect("localhost","root","","enrolldata") or die("Connection Failed");
	$query="SELECT * from student";
	$result=mysqli_query($connect,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		?>
		<tr>
			<td><?php echo $row['student_id']?></td>
			<td><?php echo $row['first_name']?></td>
			<td><?php echo $row['last_name']?></td>
			<td><?php echo $row['gender']?></td>
			<td><?php echo $row['age']?></td>
			<td><?php echo $row['email']?></td>
			<td><?php echo $row['campcode']?></td>
			<td><?php echo $row['courseid']?></td>
		</tr>
		<?php
	}
?>