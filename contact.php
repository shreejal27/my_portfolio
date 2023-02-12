<html>
    <head>
        <title>Let's Talk</title>
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    </head>
    <body>
    <?php include_once "header.php"; ?>
        <div class="main">
        <h1>Let's talk</h1><br><br><br>
          <form action="data.php" method="post">
            <label>First name</label><br>
            <input type="text" name="firstName" placeholder="Your First name" autofocus required  pattern="[a-zA-Z]+" title="Please Enter Alphabets Only || Spaces ARe NOt Allowed"><br>
            <label>Last name</label><br>
            <input type="text" name="lastName"  placeholder="Your Last name" required pattern="[A-Za-z]+" title="Please Enter Alphabets Only || Spaces ARe NOt Allowed"><br>
            <label>Email</label><br>
            <input type="text" name="email"  placeholder="Your email here" required pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$"><br>
            <label>Message</label><br>
            <textarea rows="1" cols="50" wrap="physical" name="message" placeholder="Type your message here."required  pattern="[A-Za-z0-9]+ " title="Dont Use Special Characters"></textarea>
            <input type="submit" value="Submit">
          </form>
        </div>
        <?php include_once "footer.php"; ?>
    </body>
</html>