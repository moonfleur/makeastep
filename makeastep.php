<!DOCTYPE html>
<html>
<head>
    <?php
        $title = "Make a step";
        require_once "blocks/head.php"; 
    ?>
</head>
<body>
    <?php require_once "blocks/header.php" ?>
        <section class="all_sizes">
            <?php require_once "blocks/icons.php" ?>
            <?php require_once "blocks/reg_auth.php" ?>

          <wrapper>
              <section class="zero">
                  <div class="first">
                        <h1>A journey of a thousand <br/> &nbsp;miles starts with a single step</h1>
                        <div class="clear"></div>
<!--
                        <div class="motives">
                            <img src="img/calendar.png" alt="calendar">
                            <img src="img/alarm-clock.png" alt="calendar">
                            <img src="img/distance.png" alt="calendar">
                        </div>
-->
                        <div>
                            <button class="start">
                                <a href="#anchor1">
                                    Start journey on page :) 
                                    <br/>
                                    <br/>
                                    <img src="img/expand-button.svg" alt="expand-button" class="expend">
                                    </a>
                            </button>
                        </div>
                  </div>
              </section>

              <section class="all">
                    <div class="second" id="anchor1">
                        <div>
                            <img src="img/circle.png" alt="photo">
                        </div>
                        <div class="inform">
                            <h2>Hi! My name is Kate! It's my first web-page!</h2>
                            <p>I began creating page on July, 10th. It was 2017. It's my first experience. Before this I spent much time on losing time and sometimes learning C++. Surprised? I'm too. I was carried away programming last year on May. It was 2016. But now I hope that it will a style of my life, not a bothersome everyday routine. Support me in this and scroll this page down and to other pages :) Have a good time :) </p>
                        </div>
                    </div>
                </section>
                
                <section>
                    <div class="third">
                        <h1>Did you know this about travelling?</h1>
                        <div class="abilities">
                           <img src="img/staff.svg" alt="staff" class="staff">
                           <br/>
                           <br/>
                           <p>In 1930 female stewardesses weighed less than 52 kilograms.<br/><br/><br/><br/></p>
                        </div>
                        <div class="abilities">
                           <img src="img/travel.svg" alt="travel" class="staff">
                           <br/>
                           <br/>
                           <p>The shortest flight for which you can buy a ticket lasts only 2 minutes, on the route from the Scottish island of Westray to Papa Westray.</p> 
                        </div>
                        <div class="abilities">
                           <img src="img/palm-tree.svg" alt="palm-tree" class="staff">
                           <br/>
                           <br/>
                           <p>About 300 people marry in Las Vegas every day.<br/><br/><br/><br/><br/></p> 
                        </div>
                        <div class="abilities">
                           <img src="img/boat.svg" alt="boat" class="staff">
                           <br/>
                           <br/>
                           <p>Saudi Arabia is the only country in the world where there is no river.<br/><br/><br/></p> 
                        </div>
                        <div class="abilities">
                           <img src="img/breakfast.svg" alt="breakfast" class="staff">
                           <br/>
                           <br/>
                           <p>In 1987 American Airlines removed one olive from each salad in the business class. This saved them $40,000 for the year.</p> 
                        </div>
                        <div class="abilities">
                           <img src="img/ship.svg" alt="ship" class="staff">
                           <br/>
                           <br/>
                           <p>Less than 1% of the world's population has ever decided to visit Antarctica.<br/><br/><br/></p> 
                    </div>
                </section>
                
                <section>
                    <div class="between">
                        <h1>Interactive question</h1>
                        <form method="post">
                            <h2>Please, enter the priorities of statements of your life:</h2>
                            <div class="main">
                            <div class="part">
                                <img src="img/number-one-in-a-circle.svg" alt="one">
                                <label for="Money" accesskey="q">Money:</label>
                                <input type="text" name="Money" value="" size="1" maxlength="1">
                                <br />
                                <br />
                            </div>
                            
                            <div class="part">
                                <img src="img/number-two-in-a-circle.svg" alt="two">
                                <label for="Family" accesskey="w">Family:</label>
                                <input type="text" name="Family" value="" size="1" maxlength="1">
                                <br />
                                <br />
                            </div>
                            
                            <div class="part">
                                <img src="img/number-three-in-a-circle.svg" alt="three">
                                <label for="Job" accesskey="e">Job:</label>
                                <input type="text" name="Job" value="" size="1" maxlength="1">
                                <br />
                                <br />
                            </div>
                            
                            <div class="part">
                                <img src="img/number-four-in-circular-button.svg" alt="four">
                                <label for="Love" accesskey="r">Love:</label>
                                <input type="text" name="Love" value="" size="1" maxlength="1">
                                <br />
                                <br />
                            </div>
                            
                            <div class="part">
                                <img src="img/number-five-in-circular-button.svg" alt="five">
                                <label for="Health" accesskey="t">Health:</label>
                                <input type="text" name="Health" value="" size="1" maxlength="1">
                                <br />
                                <br />
                            </div>
                            
                            <div class="part">
                                <img src="img/number-six-in-a-circle.svg" alt="six">
                                <label for="Kids" accesskey="y">Kids:</label>
                                <input type="text" name="Kids" value="" size="1" maxlength="1">
                                <br />
                                <br />
                            </div>    
                                    
                            <div class="part">
                                <img src="img/number-seven-in-a-circle.svg" alt="seven">
                                <label for="Pets" accesskey="u">Pets:</label>
                                <input type="text" name="Pets" value="" size="1" maxlength="1">
                                <br />
                                <br />
                            </div> 
                            
                            <div>
                                <input type="submit" name="submit" value="Done" class="submit">
                            </div>
                            </div>                                          
                        </form>
                    </div>
                </section>
                
                <section>
                    <div class="fourth">
                        <h1>You can find me here:</h1>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d2008.7264671376693!2d28.470795271136172!3d49.238566237144774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x0%3A0x423214f9fd28206!2z0JDRgNC10L3QtNCwINC-0YTQuNGB0L7QsiDQsiDQktC40L3QvdC40YbQtQ!3m2!1d49.234063!2d28.4696741!4m5!1s0x0%3A0x15409136c728c2c3!2z0JrQsNC8J9GP0L3RliDRgdGF0L7QtNC4ICjQsNGA0YUuINCTLiDQkNGA0YLQuNC90L7Qsik!3m2!1d49.238082899999995!2d28.471058799999998!5e0!3m2!1sru!2sua!4v1501588773514" class="frame"></iframe>
                    </div>
                </section>
            </wrapper>
        </section>
        
    <?php require_once "blocks/footer.php" ?>
     
    <script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
        
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
       
//      Анимация плавного перехода якоря 
        
        

    </script>
    
</body>
</html>