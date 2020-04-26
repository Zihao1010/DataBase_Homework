<html>
	<body>

	<h2>Stored Procedure</h2>

		<form method="POST" action="task2.php">

			<table width='600px' border='1px'>
			  <tr>
			    <th>Call_Function</th>
			    <th>Input</th> 
			    <th>Action</th>
			  </tr>
			  <tr>
			    <td>Best_Restaurants_In_City_Open_Sunday</td>
			    <td>
			    	City: <input type="text" name="city1">
			    </td>
			    <td>
			    	<input type="submit" name="submit" value="submit1">  
			    </td>
			  </tr>
			  <tr>
			    <td>Best_Restaurants_In_City_Own_Beef </td>
			    <td>
			   		City: <input type="text" name="city2"></td>
			    <td>
			    	<input type="submit" name="submit" value="submit2">  
			    </td>
			  </tr>

			</table>

		</form>


		<?php
			$servername = "localhost";
			$username = "root";
			$password = "mysql";
			$dbname = "yelp_db";
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} echo "<p><font color=\"red\">Connected successfully</font></p>";
	

			$city1 = $_POST["city1"];
			$city2 = $_POST["city2"];
			$submit = $_POST["submit"];
			
			

			if($submit == 'submit1'){

				$sql = "call Best_Restaurants_In_City_Open_Sunday('$city1')";
				$result = $conn->query($sql);
				//echo("City: ".$city);

				if($result)
					echo "<table border=1px>";

				while($row = mysqli_fetch_array($result)){

					$id = $row['id'];
					echo "<tr>";

					echo "<td><a href=./detail.php?id=$id>Detail</a></td>";

					echo"<td>{$row['name']}</td>
						 <td>{$row['hours']}";				

					echo "</tr>";

				}
				echo "</table>";

			}
			if($submit == 'submit2'){
				$sql = "Best_Restaurants_In_City_Open_Sunday('$city')";
				$result = $conn->query($sql);

				echo("City:"." ".$city);
				
;


				while($row = mysqli_fetch_array($result)){

					$id = $row['id'];

					echo "<tr>";

					echo "<td><a href=./detail.php?id=$id>Detail</a></td>";

					echo"<td>{$row['name']}</td>
						<td>{$row['text']}";				

					echo "</tr>";

				}

			}

		?>




	</body>
</html>
