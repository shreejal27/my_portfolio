<!DOCTYPE html>
<html>

<head>
    <title>Your Page Title</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        <style>
            * {
                background: #ffe4c4;
            }

            table,
            th,
            td {
                border: 1px solid green;
                border-collapse: collapse;
                text-align: center;
            }

            table.center {
                margin-left: auto;
                margin-right: auto;
            }
        </style>

        <br>
        <center>
            <h1> All Recorded Datas </h1>
        </center>
        <br><br></br>
        <table class="center">

            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>message</th>
            </tr>

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
        </table>

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