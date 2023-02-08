<footer>
        <div class="bottomrow">
            <div class="bottomleft" id="btn1">
                <p> &copy;
                 <strong> 2021 by Shreejal </strong>   <br>
                    <span onClick="onClick()">HelloWorld </span>  </p>
            
                    
            </div>
            <div class="bottomright">
                <div class=bcol1>
                <strong>  <p>Call</strong>    <br>
                        +977 9861489363</p>
                </div>
                <div class="bcol2">
                <strong><p>Write </strong>   <br>
                        shreejal27@gmail.com</p>
                </div>
                <div class="bcol3">
                <strong><p>Follow </strong>    <br>
                        <a href="https://www.facebook.com/shreejalchowder/" target="_blank" class="fa fa-facebook"></a>
                        <a href="https://www.instagram.com/shreejal27/" target="_blank" class="fa fa-instagram"></a>
                        <a href="#" target="_blank" class="fa fa-snapchat"></a>
                        <a href="#" target="_blank" class="fa fa-twitter"></a>
                        <a href="#" target="_blank" class="fa fa-pinterest"></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
        var count = 0;
        
        function onClick(){
            count++;
            if(count == 7){
                window.location.href="https://www.instagram.com/_rajwiii/";
            }
         
        }
    </script>

    <script type="text/javascript">
        let progress = document.getElementById('progressbar');
        let totalHeight = document.body.scrollHeight - window.innerHeight;
        window.onscroll = function () {
            let progressHeight = (window.pageYOffset / totalHeight) * 100;
            progress.style.height = progressHeight + "%";
        }
    </script>
