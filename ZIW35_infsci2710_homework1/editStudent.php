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
        $conn = new mysqli($severname, $username, $password, $database);
        if ($conn->connect_error){
        	die("Connnection failed: ".$conn->connect_error);

        }
        echo "<P><font color=\"red\">
            Connected successfully</font></p>";
        $ID = $_GET['id'];
        session_start();
        $_SESSION['view']=$ID;
      ?>
        <P>Add new student: </p>
        <form name="editInput" action="updateStudent.php"method="POST">
            Name:<input type="text" name="Name"><br>
            Deparment:<select name="dept">
            <option value="Biology">Biology<option/>
			<option value="Elec. Eng.">Elec. Eng.<option/>
			<option value="Comp. Sci.">Comp. Sci.<option/>
			<option value="Finance">Finance<option/>
			<option value="History">History<option/>
			<option value="Music">Music<option/>
			<option value="Physics">Physics<option/>
			<select/><br>
			Credit:<input type="text" name="Credit"><br>
			<input type="submit" value="submit">
	</form>









	
	
     


</body>
</html>