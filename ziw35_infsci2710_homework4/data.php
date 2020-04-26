<?php
$servername = "localhost";
      $username = "root";
      $password = "mysql";
      $database = "yelp_db";
      $conn = new mysqli($servername, $username, $password, $database);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 
      $sql = "";
      $spec_business = $_GET[info];
      switch($_GET[action]){
        case 'monthly_review_in_2017': 
        $sql = "select MONTH(date) as n, COUNT(id) as t FROM review WHERE YEAR(date)=2017 GROUP BY n ORDER BY MONTH(date);";
        break;
        case 'annual_review_in_all_years': 
        $sql = "select year(date) as n, COUNT(id) as t from review GROUP by n;";
        break;
        case 'monthly_review_in_2017_for_certain_business': 
        $sql = " select monthname(r.date) as n, count(r.id) as t from review r , business b WHERE r.business_id = b.id AND year(r.date) = 2017 and b.name= '".$spec_business."' group by n order by month(r.date);";
        break;
      }
      $result = $conn->query($sql);
      $output = "letter\tfrequency\n";
 if ($result){
        while($row = $result->fetch_assoc())
        {
            $output .= $row['n']."\t".$row['t']."\n"; 
        }
      }
      $result->free();
      echo $output;
      // Close connection
      mysqli_close($conn);
?>