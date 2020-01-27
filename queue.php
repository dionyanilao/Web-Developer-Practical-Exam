
<?php 
require 'includes/conn.php'
 ?>


<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>
<img src="assets/images/paintjob.png">

<p>Paint Jobs in Progress</p><br>
<table border="1" class="inProgress">
	<thead>
    <tr>
      <th scope="col">Plate No.</th>
      <th scope="col">Current Color</th>
      <th scope="col">Target Color</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


	<?php 
		$sql = 'SELECT * from paints where action = "pending" LIMIT 5';
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0 ) {
			while($rows = mysqli_fetch_assoc($result)){
				echo "<tbody><tr><th>" . $rows['plate-no.'] . "</th><th>" .$rows['current']. "</th><th>" . $rows['target'] . "</th><th>" .'<a href="">Mark as Complete</a>' . "</th></tr></tbody>" ;
			}
		}
	 ?>
</table>
Shop Performance


<?php 
	$totalcars = 'SELECT * from paints where action ="done"';
	$blue = 'SELECT * from paints where action ="done" AND target = "blue"';
	$red = 'SELECT * from paints where action ="done" AND target = "red"';
	$green = 'SELECT * from paints where action ="done" AND target = "green"';
	$result2=mysqli_query($conn,$totalcars);
	$resultCheck2 = mysqli_num_rows($result2);
	$result3=mysqli_query($conn,$blue);
	$resultCheck3 = mysqli_num_rows($result3);
	$result4=mysqli_query($conn,$red);
	$resultCheck4 = mysqli_num_rows($result4);
	$result5=mysqli_query($conn,$green);
	$resultCheck5 = mysqli_num_rows($result5);
	echo '<div class ="breakdown"><p>Total Cars Painted:</p> '.$resultCheck2.
		  '<p>Breakdown:</p>
		  <p>Blue</p>'.$resultCheck3.
		  '<p>Red</p>'.$resultCheck4.
		  '<p>Green</p>'.$resultCheck5. '</div>';	


 ?>



<p>Paint Queue</p>
</body>
</html>