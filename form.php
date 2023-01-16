<html>
<head>
        <style type="text/css">
        h2{
            position: relative;
            top: 40%;
            font-size: 3em;
            text-align: center;


    }

    body{
      background: linear-gradient(to top right, #e1b382,#c89666,#2d545e,#12343b);

    }
    </style>



</head>
<body>

</body>
</html>

<?php
if (isset($_POST['submit'])) {
    if ( isset($_POST['first_name']) && isset($_POST['last_name']) 
        && isset($_POST['age']) && isset($_POST['gender'])  && isset($_POST['campcode']) && isset($_POST['courseid']) 
        && isset($_POST['email']) && isset($_POST['password'])) {
        
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $campcode = $_POST['campcode'];
        $courseid = $_POST['courseid'];
        $email = $_POST['email'];
        $password = $_POST['password'];


        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "enrolldata";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM student WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO student( first_name, last_name, age, gender, campcode, courseid, email, password) values( ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssisssss",  $first_name, $last_name, $age, $gender, $campcode, $courseid, $email, $password);
                if ($stmt->execute()) {
                    echo "<h2>Registered Sucessfully!</h2>";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "<h2>Someone already registered using this email</h2>";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "<h2>All field are required.</h2>";
        die();
    }
}
else {
    echo "<h2>Submit button is not set</h2>";
}
?>