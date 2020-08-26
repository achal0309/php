<?php
$con = mysqli_connect("localhost","root","","ecommerce") or die(mysqli_error($con));
$email = mysqli_real_escape_string($con, $_POST['email']);
$first_name = mysqli_real_escape_string($con,$_POST['first_name']);
$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$users_registration_query = "INSERT INTO USERS (email,first_name,last_name,phone) VALUES ('$email','$first_name','$last_name','$phone')";
$users_registration_submit = mysqli_query($con, $users_registration_query) or die(mysqli_error($con));
$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
?>

