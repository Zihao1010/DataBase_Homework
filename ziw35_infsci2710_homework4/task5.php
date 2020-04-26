<!DOCTYPE html>
<html>
<head>
	<title>portal</title>
</head>
<body>
	TASK2.
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
		TASK3.
		<form method = 'POST' action = '/search.php'>
			<h1> Search Function for 1 or 2 keywords </h1>
				Keyword1 : <input type="text" name="Kw1">
				Keyword2 : <input type="text" name="Kw2">
				<input type="submit" name="submit" value="submit">

		</form>
		TASK4.
		<br>
<a href="./viz.php?action=monthly_review_in_2017">1.  The distribution of monthly review count in 2017</a> <br>
<a href="./viz.php?action=annual_review_in_all_years">2. The distribution of annual review count in all years.</a> <br>

 <a>3. The distribution of monthly review count in 2017 of a certain business.</a><br>

 <form method="POST" action="./viz.php?action=monthly_review_in_2017_for_certain_business">
  Specific business name: <input type="text" name="business_name">
  <input type="submit" name="submit" value="submit">
         
  </form>


</body>
</html>