<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Secret</title>
  <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
  <link rel="stylesheet" href="login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<section class='login' id='login'>
  <div class='head'>
  <h1 class='info'>You Found The Secret !</h1>
  </div>
  <p class='msg'>Please Input Correct Credentials</p>
  <div class='form'>
    <form action="showdata.php" method="POST">
  <input type="text" placeholder='Username' class='text' id='username' name="username" required><br><br>
  <input type="password" placeholder='••••••••••' class='password' name="password" required><br>
  <br><br>
  <input type="submit" class='btn-login' id='do-login' value="Login">

    </form>
  </div>
</section>
  <script  src="./script.js"></script>

</body>
</html>
