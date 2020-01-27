<?php 
require 'conn.php';
if (isset($_POST['submit'])) {
	$plate = $_POST['plate-number'];
	$current = $_POST['c-color'];
	$target = $_POST['t-color'];
	$action = "pending";

	$sql = "INSERT INTO `paints`(`plate-no.`, `current`, `target`, `action`) VALUES (?,?,?,?)";
	$stmt = mysqli_stmt_init($conn);

	if (!mysqli_stmt_prepare($stmt, $sql)) {
		header('Location: ../signup.php?error=sqlerror');
		exit();
	}else{
		mysqli_stmt_bind_param($stmt, 'ssss', $plate,$current,$target,$action);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		header('Location: ../queue.php');
		exit();

	}
}else{
	header('Location: ../index.php');
}