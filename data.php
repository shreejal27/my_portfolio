<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('sql6.freesqldatabase.com', 'sql6585225', '3Pk2QBNdws','sql6585225');
if (mysqli_connect_errno()) {
    echo  mysqli_connect_error();
} else {
    //echo "connected";
}


// get the post records
$txtfirstName = $_POST['firstName'];
$txtlastName = $_POST['lastName'];
$txtemail = $_POST['email'];

$txtmessage = $_POST['message'];

// database insert SQL code
$sql = "INSERT INTO info (firstName, lastName, email, message) VALUES ('$txtfirstName', '$txtlastName', '$txtemail', '$txtmessage')";

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