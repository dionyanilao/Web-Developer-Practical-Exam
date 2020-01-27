

<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>

	



<img src="assets/images/newpaintjob.png"><br>

<script type="text/javascript">

	
	function getCurrent(selectColor) {
	  	var value = selectColor.value;  	
	  	if (value == "red") {
	  		image1.src = "assets/images/red.png"
	  	}
	  	else if (value == "green") {
	  		image1.src = "assets/images/green.png"
	  	}
	  	else if (value == "blue") {
	  		image1.src = "assets/images/blue.png"
	  	}else{
	  		image1.src = "assets/images/default.png"
	  	}
	}
	function getTarget(selectColor) {
	  	var value = selectColor.value;  	
	  	if (value == "red") {
	  		image2.src = "assets/images/red.png"
	  	}
	  	else if (value == "green") {
	  		image2.src = "assets/images/green.png"
	  	}
	  	else if (value == "blue") {
	  		image2.src = "assets/images/blue.png"
	  	}else{
	  		image2.src = "assets/images/default.png"
	  	}
	}
</script>



	<div id="image-container">
		<img id="image1" src="assets/images/default.png">
		<img id="arrow" src="assets/images/arrow.png">
		<img id="image2" src="assets/images/default.png">

	</div>






<img src="assets/images/cardetails.png">
 

<form method="POST" action="includes/submit.php">
 <label for="plate-number">Plate No.</label>
 <input type="text" name="plate-number" id="plate-number"><br>
<label for="c-color">Current color</label>
<select id="c-color" name="c-color" class="c-color" onchange="getCurrent(this)">
	<option></option>
	<option value="red">Red</option>
	<option value="green">Green</option>
	<option value="blue">Blue</option>
</select><br>
<label for="t-color">Target color</label>
<select id="t-color" name="t-color" onchange="getTarget(this)">
	<option></option>
	<option value="red">Red</option>
	<option value="green">Green</option>
	<option value="blue">Blue</option>
</select><br>
<button type="submit" name="submit">Submit</button>
</form>




</body>
</html>