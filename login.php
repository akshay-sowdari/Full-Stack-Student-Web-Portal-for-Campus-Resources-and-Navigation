
<html>
<head>
    <style type="text/css">
        h2 {
                 position: relative;
            top: 40%;
            font-size: 3em;
            text-align: center;


    }
    body{
      background: linear-gradient(to top right, #e1b382,#c89666,#2d545e,#12343b);
    }
    </style>
    <title></title>

</head>
<body>

</body>
</html>





<?php

    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con = new mysqli("localhost","root","","enrolldata");
    if($con->connect_error)
    {
        die("Failed to connect : ".$conn->connect_error);

    }
    else
    {

        $stmt = $con->prepare("SELECT * from student where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result=$stmt->get_result();
        if($stmt_result->num_rows > 0)
        {
        
            $data = $stmt_result -> fetch_assoc();
            if($data["password"] === $password)
            {
                echo "<h2>Login Successful!<h2>";
            } else{
                echo "<h2>Invalid Email or Password<h2>";
            }
        }
        else
        {
            echo "<h2>Invalid Email or Password<h2>";
        }
        }
?>