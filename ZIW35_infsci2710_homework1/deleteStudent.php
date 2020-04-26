<!DOCTYPE html>
<html>
<head>
	<title>
	Welcome to the INFSCI 2710!
    </title>
</head>
<body>
	<?php
	     $severname = "localhost";
	     $username = "root";
	     $password = "mysql";
	     $database = "lab";
	     $conn = new mysqli($severname, $username, $password, $database);if ($conn->connect_error){
        	die("Connnection failed: ".$conn->connect_error);

        }
        echo "<P><font color=\"red\">
            Connected successfully</font></p>";

        $ID = $_GET['id'];

        $sql = "DELETE FROM student WHERE ID = ".$ID;

        if ($conn->query($sql) === TRUE) {
        
        echo "Successful！<a href='selectStudent.php'>Check the result!</a>";
        
        } else {
        
        echo "Something Wrong<a href='selectStudent.php'>Try again!</a>";
        }
    ?>
</body>
</html>