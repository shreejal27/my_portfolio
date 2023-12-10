<html>
    <head>
        <title>Shreejal's Resume</title>
        <link rel="stylesheet" href="resume.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <?php include_once "header.php";
     $json = file_get_contents('resume.json');
     $resumeData = json_decode($json, true);
    ?>
        <div class="main">
            <h1>Resume</h1>
            <br><br><br><br><br><br>
            <span ><strong id="text">Experience</strong></span>
                <a href="./shree.pdf" download="shreejal_cv">
                    <button>Download CV</button></a>
            <br><br>
            <?php
            foreach($resumeData['experience'] as $experience):
            ?>
            <div class="row">
                <div class="lcol">
                <p><strong><?= $experience['startDate'] ." - ". $experience['endDate'] ?></strong> <br>
                <?= $experience['jobTitle']?> <br><br>
                <?= $experience['company']?> <br>
                <?= $experience['location']?><br></p>
                </div>
                <div class="rcol">
                 <p><?= $experience['description']?></p>
                </div>
            </div>
            <?php 
            endforeach 
            ?>
           <br><br><br><br><br>
           <span ><strong id="text">Education</strong></span>
           <br><br>
            <!-- 
                <div class="row">
                <div class="lcol">
                <p><strong>September 2019 - Present</strong> <br>
                    Kathmandu BernHardt College <br>
                    Bachelors in Computer Application <br><br>
                    Bafal<br></p>
                </div>
                <div class="rcol">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ipsum nostrum harum. Quod recusandae necessitatibus esse, quia quidem facere ratione, eaque fuga, dignissimos incidunt suscipit aut. Rerum impedit velit quasi?</p>           
                </div>
                </div>
                <div class="row">
                    <div class="lcol">
                    <p><strong>April 2017 - December 2019</strong> <br>
                        Kathmandu BernHardt Secondary School <br>
                        +2 Management <br><br>
                        Balkhu<br></p>
                    </div>
                    <div class="rcol">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ipsum nostrum harum. Quod recusandae necessitatibus esse, quia quidem facere ratione, eaque fuga, dignissimos incidunt suscipit aut. Rerum impedit velit quasi?</p>           
                    </div>
                    </div>
                    <div class="row">
                    <div class="lcol">
                    <p><strong>April 2016 - June 2017</strong> <br>
                        Kathmandu BernHardt Secondary School <br>
                        SEE <br><br>
                        Balkhu<br></p>
                    </div>
                    <div class="rcol">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ipsum nostrum harum. Quod recusandae necessitatibus esse, quia quidem facere ratione, eaque fuga, dignissimos incidunt suscipit aut. Rerum impedit velit quasi?</p>           
                    </div>
                    </div>
                    <div class="lastrow">
                        <br><br>
                        <strong id="lasttext">Professional skillset</strong>
                        <br><br><br>
                        <ul class="list">
                            <li>HTML / CSS</li>
                            <li>Php</li>
                            <li>Javascript</li>
                            <li>C#</li>
                            <li>React</li>
                            
                        </ul>
                        <br>
                        <br>
                        <strong id="lasttext">Languages</strong>
                        <br><br><br>
                        <ul class="list">
                            <li>Nepali</li>
                            <li>Newari</li>
                            <li>English</li>
                            <li>Hindi</li>
                        </ul>
                    </div>
            
                </div>
                </div> 
            -->
            <?php
            foreach($resumeData['education'] as $education):
            ?>
            <div class="row">
                    <div class="lcol">
                    <p><strong><?= $education['startDate'] ." - ". $education['endDate'] ?></strong> <br>
                    <?= $education['institution']?> <br>
                    <?= $education['degree']?><br><br>
                    <?= $education['location']?><br></p>
                    </div>

                    <div class="rcol">
                    <p>  <?= $education['description']?></p>           
                    </div>
            </div>
            <?php 
            endforeach 
            ?>

                <div class="lastrow">
                    <br><br>
                    <strong id="lasttext">Professional skillset</strong>
                    <br><br><br>
                    <ul class="list">
                        <?php foreach ($resumeData['skills']['professional'] as $skill): ?>
                            <li><?= $skill ?></li>
                        <?php endforeach; ?>
                        
                    </ul>
                    <br>
                    <br>
                    <strong id="lasttext">Languages</strong>
                    <br><br><br>
                    <ul class="list">
                    <?php foreach ($resumeData['skills']['languages'] as $language): ?>
                            <li><?= $language ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
        </div>
    <?php include_once "footer.php"; ?>
    </body>
</html>
