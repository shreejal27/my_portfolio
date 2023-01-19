<?php
$username="shreejal27";
$password="helloworld";

if(($username== $_POST['username'] && $password==$_POST['password']) ||  ($_POST['username']== "rajwishreejal" && $_POST['password']== "mylove")){

    echo '<script> 
    alert ("You Have Access To All The Recorded Datas")
    </script>';

$host= "sql6.freemysqlhosting.net";
$user= "sql6585225";
$password= "3Pk2QBNdws";
$database= "sql6585225";

$connection= mysqli_connect($host, $user, $password, $database);
 if (mysqli_connect_errno()) {
    echo  mysqli_connect_error();
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

    $query= "Select * from info";

    $result= mysqli_query($connection, $query);



    while($row= mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row["firstName"]?></td> 
            <td><?php echo $row["lastName"]?></td> 
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
