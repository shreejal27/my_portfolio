
<!DOCTYPE html>

<html>
<meta http-equiv='cache-control' content='no-cache'> 
<meta http-equiv='expires' content='0'> 
<meta http-equiv='pragma' content='no-cache'>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<head>
    <title>Shreejal's Portfolio</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
 

    <?php include_once "header.php"; ?>


    <div class="body">
        <div class="col1">
        </div>
        <div class="col2">
        </div>
        <div class="mainbox">
            <div class="mainboxcol1">

               
                    <div class="image" id="btn">

                    </div>
             

                <div class="name">
                    <h1><strong> Shreejal</strong></h1>
                    <h1>Maharjan</h1>
                </div>
                <div>
                    <hr>
                </div>
                <div class="job">
                    <h2>Hungry Learner</h2>
                </div>
                <div class="iconbar">
                    <a href="https://www.facebook.com/shreejalchowder/" target="_blank"
                        class="fa fa-2x fa-facebook"></a>
                    <a href="https://www.instagram.com/shreejal27/" target="_blank" class="fa fa-2x fa-instagram"></a>
                    <a href="https://twitter.com/shreejal27" target="_blank" class="fa fa-2x fa-twitter"></a>
                    <a href="https://www.linkedin.com/in/shreejal27/" target="_blank" class="fa fa-2x fa-linkedin"></a>
                </div>
            </div>
            <div class="mainboxcol2">
                <div class="info1">
                    <p><strong> HELLO</strong></p>
                </div>
                <div class="info2">
                    <p>Here's who I am & what I do</p>
                </div>
                <div class="button">
                    <a href="resume.php" target="_blank">
                        <button>Resume</button></a>
                    <a href="https://github.com/shreejal27" target="_blank">
                        <button>Github</button></a>
                </div>
                <div class="para">
                    Shreejal can game 24/7 without any problems but cannot control his crosshair like his life.
                </div>
            </div>
        </div>
    </div>
    <?php include_once "footer.php"; ?>
    <script type="text/javascript">
        var count = 0;
        var btn = document.getElementById("btn");

        btn.onclick = function(){
            count++;
            if (count== 3){
                window.location.href="login.php";
            }
        }


    </script>

</body>

</html>

