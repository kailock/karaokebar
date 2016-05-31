<?php

$dbConnect = new PDO("sqlsrv:Server=http://www.ischool.uw.edu/is-hay04;Database=karaoke_bar", "info445", "GoHuskies!");

function insertCustomer() {
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$county = $_POST['county'];
	$zip = $_POST['zip'];
	$dob = $_POST['dob'];
	$stmt = $dbConnect -> prepare("exec insertCustomer @firstName = ?, @lastName = ?, @email = ?, @address = ?, @city = ?, @county = ?, @state = ?, @zip = ?, @dob = ?");
	$stmt -> bindParam(1, $first);
	$stmt -> bindParam(2, $last);
	$stmt -> bindParam(3, $email);
	$stmt -> bindParam(4, $address);
	$stmt -> bindParam(5, $city);
	$stmt -> bindParam(6, $state);
	$stmt -> bindParam(7, $county);
	$stmt -> bindParam(8, $zip);
	$stmt -> bindParam(9, $dob);
	$stmt -> execute();
}