<!DOCTYPE html>
<html>
<head>
	<title>Welcome to INFSCI 2710</title>
</head>
<body>
	<?php
        echo "<a href='addStudent.html'>Add New Student</a>";
        
        $severname = "localhost";
        $username = "root";
        $password = "mysql";
        $database = "lab";
        $conn = new mysqli($severname, $username, $password, $database);
        
        if ($conn->connect_error){
        	die("connection failed: ".$conn->connect_error);
        }
        echo "<p><font color=\"red\">
        Connected successfully</font></p>";
        $sql = "select * from student";
        $result = $conn->query($sql);

        

        if ($result){
        	echo "<table border=1px>";
        	while($row = $result->fetch_assoc())
        	{
        		echo"<tr>";
                        echo "<td> <a href='deleteStudent.php?id=".$row[ID]."'>Delete</a></td>";
                        echo "<td> <a href='editStudent.php?id=".$row[ID]."'>Edit</a></td>";
        		foreach($row as $key=>$value)
                {
                	echo "<td>$value</td>";
                }
                echo "</tr>";
        	}
        	echo"</table>";
        }
        
        $a = "select count(*) as shu from student";
        $b = $conn->query($a);
        $c = $b->fetch_assoc();
        echo "<p> The total number of students are: " .$c['shu']."</p>";
        
        $d = "select AVG(tot_cred) as avg from student";
        $e = $conn->query($d);
        $f = $e->fetch_assoc();
        echo "<p> The average grade of the students are: ".$f['avg']."</p>";
        ?>


</body>
</html>