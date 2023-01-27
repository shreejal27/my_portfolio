<html>
    <head>
        <title>Shreejal's Project</title>
        <link rel="stylesheet" href="project.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <?php include_once "header.php"; ?>
        <div class="main">
            <center>
                <h1>Projects</h1><br><br><br>
                <p>
                    Here is the overview of some of the few projects I have completed throughout my career.
                </p><br><br>
            </center>
             <div class="row">
                 <div class="lcol">
                 <p><strong>Rock Paper Scissor  </strong> <br>
                 Mini Game <br><br>
                 "Get ready to play the classic game of Rock, Paper, Scissors in a whole new way! With sleek HTML and CSS design, and dynamic JavaScript functionality, this game is sure to provide hours of entertainment. 
                 <br><br>
                 Choose your weapon and take on the computer in a battle of wits and strategy. Will you come out victorious? Play now and find out!"</p>
            <a href="https://shreejal27.github.io/RockPaperScissor/" target="_blank"><button id="b1">See Live</button> </a>
           <a href="https://github.com/shreejal27/RockPaperScissor/" target="_blank"> <button id="b2">Source Code</button> </a> 
                 </div>
                 <div class="rcol">
                    img1
                 </div>
             </div>
             <div class="row">
                <div class="lcol">
                <p>Project Name 1 <br>
                Role Title <br><br>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit soluta suscipit perferendis repellendus cupiditate maxime pariatur dicta ea, illum possimus deserunt quo voluptas voluptatem doloribus quis? Autem possimus voluptas voluptatem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sunt omnis soluta laboriosam accusamus amet obcaecati non unde vitae. Nam labore exercitationem fugiat officia impedit provident sit numquam corrupti facere?</p>
                </div>
                <div class="rcol">
                    img2
                </div>
            </div>
            <div class="row">
                <div class="lcol">
                <p>Project Name 1 <br>
                Role Title <br><br>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit soluta suscipit perferendis repellendus cupiditate maxime pariatur dicta ea, illum possimus deserunt quo voluptas voluptatem doloribus quis? Autem possimus voluptas voluptatem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil sunt omnis soluta laboriosam accusamus amet obcaecati non unde vitae. Nam labore exercitationem fugiat officia impedit provident sit numquam corrupti facere?</p>
                </div>
                <div class="rcol">
                    img3
                </div>
            </div>
            
         </div>
         <script type="text/javascript">
                    const codeButton = document.getElementById("b2");
                    let buttonName = codeButton.innerHTML;
                    codeButton.addEventListener("mouseover", function() {
                    let randomCode = "&lt;html&gt;" + "<br>"+ "&lt;head&gt;";
                    codeButton.innerHTML = "<pre>"+randomCode+"</pre>";

                    });
                    codeButton.addEventListener("mouseout", function() {
                        codeButton.innerHTML= buttonName;
                    });
         </script>
         <?php include_once "footer.php"; ?>
         
    </body>
</html>