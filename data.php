<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$database_host = 'aws.connect.psdb.cloud';
$database_user = 'cb1nlt9315op7ha7nv5u';
$database_password = 'pscale_pw_18cS7KVFJu1FQqxZu9yUKLxnRN9sns73X0IsQMKpsfY';
$database_name = 'portfolio_db';

// Create a new mysqli instance with SSL options
$con = mysqli_init();
mysqli_ssl_set($con, NULL, NULL, NULL, NULL, NULL);

// Establish a secure connection
if (!mysqli_real_connect($con, $database_host, $database_user, $database_password, $database_name, 3306, NULL, MYSQLI_CLIENT_SSL)) {
    die("Connection failed: " . mysqli_connect_error());
}


// get the post records
$txtfirstName = $_POST['firstName'];
$txtlastName = $_POST['lastName'];
$txtemail = $_POST['email'];

$txtmessage = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO portfoliodata(firstName, lastName, email, message) VALUES ('$txtfirstName', '$txtlastName', '$txtemail', '$txtmessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo '<script> 
        alert ("Your Information Has Been Successfully Recorded! ")
        window.location.replace("index.php");
        </script>';
    //return to contact form 
} else {
    echo mysqli_error($con);
}

?>