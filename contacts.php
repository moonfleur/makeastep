<!DOCTYPE html>
<html>
<head>
    <?php
        $title = "Contact me";
        require_once "blocks/head.php"; 
    ?>
</head>
<body>
    <?php require_once "blocks/header.php" ?>
        <section class="all_sizes">
            <?php require_once "blocks/icons.php" ?>
            <?php require_once "blocks/reg_auth.php" ?>
            <section class="zero1">
                <form name="myForm" method="post" class="contacts" onsubmit="validateForm()">
                    <h3>Contact me:</h3>
                    <div class="letter">
                        <a href="https://vk.com/moonfleur" target="_blank" class="vk">
                            Vk
                        </a>
                        <a href="https://www.facebook.com/moonfleur97" target="_blank" class="fb">
                            Facebook
                        </a>
                    </div>
                    <div class="letter1">
                        <label for="Name" accesskey="q" class="label">Your name:</label>
                        <br />
                        <br />
                        <input type="text" name="Name" value="" size="74" maxlength="50" class="input">
                        <br />
                        <br />
                    
                        <label for="Email" accesskey="w" class="label">Your email:</label>
                        <br />
                        <br />
                        <input type="text" name="Email" value="" size="74" maxlength="50" class="input">
                        <br />
                        <br />
                    
                        <input type="submit" name="submit" value="Write me" class="message">
                    </div>
                </form>
            </section>
        </section>
        
    <?php require_once "blocks/footer.php" ?>
     
    <script>
        
//      Аудио
        
        myVid=document.getElementById("myPlayer");
        myVid.volume=0.07;
        
//      Кнопка включения/выключения аудио
        
        document.getElementById("mybtn").onclick = function(){
            var myaudio = document.getElementById("myPlayer");
            if(myPlayer.paused == true){
                document.getElementById("myPlayer").play();
                this.className = "play_btn";
            }

            else if (myPlayer.paused == false){
                document.getElementById("myPlayer").pause();
                this.className = "pause_btn";
            }
        } 
        
        function validateForm() {
            var element = document.forms["myForm"] ["Name"].value;
            if (element == "") {
                alert ("Enter your name, please");
                return false;
            }
            
            var element = document.forms["myForm"] ["Email"].value;
            if (element == "") {
                alert ("Enter your email, please");
                return false;
            }
            if (element != "@") {
                alert ("Enter correct email, please");
                return false;
            }
        }
       
    </script>
    
</body>
</html>