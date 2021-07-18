<?php include('templates/header.php');?>

<div class="hero">
            <div class="side">
                <div class="icon">
                    <ul>
                        <li><a id="discover" href="#"><i class="fa fa-bolt"></i></a></li>
                        <li><a id="play-music" href="#"><i class="fa fa-music"></i></a></li>
                        <li><a id="pause" href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href=""><i class="fa fa-ellipsis-v"></i></a></li>
                        <li><a href=""><i class="fas fa-broadcast-tower"></i></a></li>
                        <li><a href=""><i class="fas fa-user-friends"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="text">
                <h1>Be Yourself</h1>
                <h2>do not lose yourself</h2>
                <img src="./lib/images/man.png" alt="">
            </div>
            <div id="artist" class="right-side-list">
                <div class="title">
                    <h3>Top Artist</h3>
                </div>
                <ul>
                    <li id='jubin'>
                        <div class="img">
                            <img src="./lib/images/jubin.jpg" alt="">
                        </div>
                        <div class="title">
                            <div class="name">Jubin Nutiyal</div>
                            <div class="count">10 songs</div>
                        </div>
                    </li>
                    <li id='arijit'>
                        <div class="img">
                            <img src="./lib/images/arijit.jpg" alt="">
                        </div>
                        <div class="title">
                            <div class="name">Arijit Sing</div>
                            <div class="count">16 songs</div>
                        </div>
                    </li>
                    <li id='anupam'>
                        <div class="img">
                            <img src="./lib/images/anupam.jpg" alt="">
                        </div>
                        <div class="title">
                            <div class="name">Anupam Roy</div>
                            <div class="count">10 songs</div>
                        </div>
                    </li>
                    <li id='minar'>
                        <div class="img">
                            <img src="./lib/images/minar.jpg" alt="">
                        </div>
                        <div class="title">
                            <div class="name">Minar Rahman</div>
                            <div class="count">2 songs</div>
                        </div>
                    </li>
                    <li id='one-direction'>
                        <div class="img">
                            <img src="./lib/images/onedirection.jpg" alt="">
                        </div>
                        <div class="title">
                            <div class="name">One direction</div>
                            <div class="count">5 songs</div>
                        </div>
                    </li>
                    <li id='tahsan'>
                        <div class="img">
                            <img src="./lib/images/tahsan.jpg" alt="">
                        </div>
                        <div class="title">
                            <div class="name">Tahsan Khan</div>
                            <div class="count">7 songs</div>
                        </div>
                    </li>
                </ul>
            </div>
        
        </div>
        <?php include('templates/player.php');?>
    </main>
    

   
    
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.1.3/howler.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script src="./lib/js/function.js"></script>
</body>
</html>