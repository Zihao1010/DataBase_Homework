<html>		
	<body>
		<form method = 'POST' action = '/search.php'>
			<h1> Search Function for 1 or 2 keywords </h1>
				Keyword1 : <input type="text" name="Kw1">
				Keyword2 : <input type="text" name="Kw2">
				<input type="submit" name="submit" value="submit">

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

			$key1 = $_POST["Kw1"];
			$key2 = $_POST["Kw2"];	
			$submit = $_POST["submit"];

			if($submit == 'submit'){			

				if (empty($key1) && empty($key2)){

					echo "Input should not be empty";
				}

				echo "<table width='600px' border='1px'>";

				echo "<th>Operation</th>";

				echo "<th>Business Name</th>
						<th>Review</th>";

				$result = $conn ->query("
					select b.id, b.name, r.text 
					from business b, review r 
					where b.id = r.business_id and r.text like '%$key1%' and r.text like '%$key2%'
					limit 10 ");


				while($row = mysqli_fetch_array($result)){

					echo "<tr>";
					$id = $row['id'];

					echo "<td><a href=./detail.php?id=$id>Detail</a></td>";

					echo 	"<td>{$row['name']}</td>
							<td>{$row['text']}</td>";

					echo "</tr>";

				}
				$result->free();
			}
		?>

	</body>
</html>