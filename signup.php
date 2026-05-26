<?php

include 'db.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$phone = $_POST['phone'];
$address = $_POST['address'];

if($password != $confirmpassword)
{
    die("Password and Confirm Password do not match!");
}

$sql = "INSERT INTO users
(firstname, lastname, email, password, phone, address)

VALUES
('$firstname', '$lastname', '$email', '$password', '$phone', '$address')";

if(mysqli_query($conn, $sql))
{
    echo "Signup Successful";
}
else
{
    echo "Error: " . mysqli_error($conn);
}

?>

