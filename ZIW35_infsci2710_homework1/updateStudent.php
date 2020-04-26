<!DOCTYPE html>

<html>
<head>
	<title>
		Welcome to INFSCI 2710!
	</title>
</head>
<body>
	<?php
	    $Name = $_POST["Name"];
        $dept = $_POST["dept"];
        $credit = $_POST["Credit"];
        
        $severname = "localhost";
        $username = "root";
        $password = "mysql";
        $database = "lab";
        $conn = new mysqli($severname, $username, $password, $database);
        if ($conn->connect_error){
        	die("Connnection failed: ".$conn->connect_error);

        }
        echo "<P><font color=\"red\">
            Connected successfully</font></p>";
            session_start();
        $a=$_SESSION['view'];

        $sql="UPDATE student SET name='".$Name."',dept_name='".$dept."',tot_cred=".$credit." WHERE id=".$a;
        if ($conn->query($sql) === TRUE) {
        
        echo "Successful！<a href='selectStudent.php'>Check the result!</a>";
        
        } else {
        echo "Something Wrong<a href='selectStudent.php'>Try again!</a>";
        }
        

       







	?>






</body>
</html>