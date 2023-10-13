<!DOCTYPE html>
<html>

<head>
    <title>Your Page Title</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <?php
    // database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
    
    $database_host = 'aws.connect.psdb.cloud';
    $database_user = 'r7k7m7cniv3yus0zhqwg';

    $database_password1 = 'pscale_pw_';
    $database_password2 = 'KmcEzTRYS';
    $database_password3 = 'peisw3f4d8PbM8Nr';
    $database_password4 = '3uiHLzaA3tZ9ZNeyui';
    $database_password = $database_password1 . $database_password2 . $database_password3 . $database_password4;

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

    if ($rs) {
        echo '<script>
    Swal.fire({
        position: "top-end",
        icon: "success",
        title: "Your Information Has Been Successfully Recorded!",
        showConfirmButton: false,
        timer: 1500
    }).then(() => {
        window.location.replace("index.php");
    });
    </script>';

    } else {
        //for mysqli error
        // echo mysqli_error($con);
        echo '<script>
        Swal.fire({
            position: "top-end",
            icon: "error",
            title: "Your Information Is Not Recorded! Please Try Again",
            showConfirmButton: false,
            timer: 1500
        }).then(() => {
            window.location.replace("index.php");
        });
    </script>';
    }

    ?>
</body>

</html>