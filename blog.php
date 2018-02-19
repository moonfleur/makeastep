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
       
    </script>
    
</body>
</html>