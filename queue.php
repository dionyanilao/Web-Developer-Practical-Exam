	
<?php 
require 'includes/conn.php';
require 'header.php';
 ?>
 
<h2 class="header2">Paint Jobs</h2>
		
<h4 class="header5">Paint Jobs in Progress</h4><br>
<form method="POST" class="in-progress">
<table border="2" class="tblInProgress">
	<thead>
    <tr>
      <th scope="col">Plate No.</th>
      <th scope="col">Current Color</th>
      <th scope="col">Target Color</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 	

	<?php 
		$sql = 'SELECT  * from paints where action = "pending" LIMIT 5';
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
			

		if ($resultCheck > 0 ) {
			while($rows = mysqli_fetch_assoc($result)){
				echo "<tbody><tr><th>" . $rows['plate'] . "</th><th>" .$rows['current']. "</th><th>" . $rows['target'] . "</th><th>" .'<a onclick = refresh() href=queue.php?id='.$rows['id']  .' class="done" name="done ">Mark as Complete</a>' . "</th></tr></tbody>" ;

			}
	

			if (isset($_GET['id'])) {
				$update= 'UPDATE `paints` SET `action`="done" WHERE id='.$_GET['id'];
				mysqli_query($conn, $update);
				$sql = 'SELECT  * from paints where action = "pending" LIMIT 5';
				header('Location: queue.php?action=done');
					
			}	
			

		}

	 ?>


</table>
</form>



<div class="sp"><span class="spHeader">Shop Performance</span></div>

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

	echo '<div class ="breakdown"><span>Total Cars Painted:<span><span class="result1 results">'.$resultCheck2.
		  '</span><br> Breakdown:<br>
		  <div class="breakdownColors">
		  Blue<span class="result2 results">'. $resultCheck3.'</span><br>
		  Red<span class="result3 results">'.$resultCheck4.'</span><br>
		  Green<span class="result4 results">'.$resultCheck5. '</span></div></div>';	


 ?>


<div class="pq">
<h4 id="pq">Paint Queue</h4>
<table border="1" class="inProgress">
	<thead>
    <tr>
      <th scope="col">Plate No.</th>
      <th scope="col">Current Color</th>
      <th scope="col">Target Color</th>
  
    </tr>
  </thead>
  <?php 
		$sql = 'SELECT  * from paints where action = "pending" LIMIT 1000000 OFFSET 5';
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);

		if ($resultCheck > 0 ) {
			while($rows = mysqli_fetch_assoc($result)){
				echo "<tbody><tr><th>" . $rows['plate'] . "</th><th>" .$rows['current']. "</th><th>" . $rows['target'] . "</th></tr></tbody>" ;
			}
		}
	 ?>
  </table>
  </div>
</body>
</html>

<!-- UPDATE `paints` SET`action`="pending" WHERE 1 -->