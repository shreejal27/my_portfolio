<?php
$username="shreejal27";
$password="helloworld";

if(($username== $_POST['username'] && $password==$_POST['password']) ||  ($_POST['username']== "rajwishreejal" && $_POST['password']== "mylove")){

    echo '<script> 
    alert ("You Have Access To All The Recorded Datas")
    </script>';

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


?>
<style>
    *{
      background: #ffe4c4;
    }
    table, th, td {
  border: 1px solid green;
  border-collapse: collapse;
  text-align: center;
}
table.center{
    margin-left:auto;
    margin-right:auto;
}
</style>

    <br>
    <center><h1> All Recorded Datas </h1> </center> 
    <br><br></br>
<table class="center" >
 
    <tr>
     <th>First Name</th>     <th>Last Name</th>     <th>Email</th>   <th>message</th>     
</tr>

<?php

    $query= "Select * from portfoliodata";

    $result= mysqli_query($con, $query);



    while($row= mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row["firstname"]?></td> 
            <td><?php echo $row["lastname"]?></td> 
            <td><?php echo $row["email"]?></td> 
            <td><?php echo $row["message"]?></td> 

            </tr>
    <?php 
        }
        ?>
        </table>
     
<?php
}
else{
    echo '<script> 
    alert ("You Have Entered Wrong Credentials ")
    window.location.replace("index.php");
    </script>';
}

?>
