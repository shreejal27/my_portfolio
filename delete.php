<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Get the "id" value from the URL
    $id = $_GET['id'];

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

    $query = "DELETE FROM portfoliodata WHERE id = $id";

    // Execute the DELETE query
    if (mysqli_query($con, $query)) {
        echo "Record has been deleted successfully.";
        //     echo '<script>
        //     Swal.fire({
        //         position: "top-end",
        //         icon: "success",
        //         title: "Record has been deleted successfully.",
        //         showConfirmButton: false,
        //         timer: 1500
        //     }).then(() => {
        //         window.location.replace("showdata.php");
        //     });
        // </script>';
    } else {
        echo "Error: Record could not be deleted. " . mysqli_error($con);
    }

} else {
    header("Location: showdata.php");
}

?>