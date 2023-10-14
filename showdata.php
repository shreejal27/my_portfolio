<!DOCTYPE html>
<html>

<head>
    <title>Your Page Title</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Include jQuery, Bootstrap, and DataTables libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

    <style>
        body {
            background: #ffe4c4;
        }

    </style>
</head>

<body>
    <?php
    $username = "shreejal27";
    $password = "helloworld";

    if (($username == $_POST['username'] && $password == $_POST['password']) || ($_POST['username'] == "rajwishreejal" && $_POST['password'] == "mylove")) {
        echo '<script>
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Access Granted",
            showConfirmButton: false,
            timer: 1500
        })
    </script>';

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
        ?>

        <br>
        <div class="container">
            <h1 class="text-center">All Recorded Datas</h1>
            <br><br>
            <table class="table table-striped" id="table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "Select * from portfoliodata";
                    $result = mysqli_query($con, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $row["firstname"] ?>
                            </td>
                            <td>
                                <?php echo $row["lastname"] ?>
                            </td>
                            <td>
                                <?php echo $row["email"] ?>
                            </td>
                            <td>
                                <?php echo $row["message"] ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <script>
            $(document).ready(function () {
                $('#table').DataTable();
            });
        </script>
            <?php
    } else {
        echo '<script>
        Swal.fire({
            position: "top-end",
            icon: "error",
            title: "Access Denied",
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