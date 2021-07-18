var flag = 0;
var artist = 'one-direction';
var currentList = 'night-changes';
$('#artist').transition('hide');
$('.player-bar').transition('hide');
var songsToPlay = new Howl({
    src: ['./lib/songs/'+artist+'/'+currentList+'.mp3']
  });

function musicPlayer(){
    if($('.player-bar').hasClass("hidden")){
        $('.player-bar') .transition('fade up');
    }
}
function hideMusicPlayer(){
  if($('.player-bar').hasClass("hidden")){
      
  }
  else{
    $('.player-bar') .transition('fade out');
  }
}

var sound = new Howl({
    src: ['./lib/songs/'+artist+'/'+currentList+'.mp3']
  });

$('#discover').click(function(){
   
        $('#artist').transition('fade left');
        $(this).parent().toggleClass('active');

        if($('#artist').hasClass('visible')){
          $('.hero .text img').css("right",'10vw');
          $('.hero .text h2').css("left",'-5vw');
         
        }
        else{
          
          $('.hero .text img').css("right",'20vw');
          $('.hero .text h2').css("left",'0');
         
        }

   
});

$('#jubin').click(function(){
    currentList = "tujhe-kitna";
    artist = 'jubin';
    musicPlayer();
    soundPause();
    sound = new Howl({
        src: ['./lib/songs/'+artist+'/'+currentList+'.mp3']
      });
    soundPlay();
    
});
$('#arijit').click(function(){
    currentList = "uska";
    artist = 'arijit';
    musicPlayer();
    soundPause();
    sound = new Howl({
        src: ['./lib/songs/'+artist+'/'+currentList+'.mp3']
      });
    soundPlay();
    
});
$('#anupam').click(function(){
    currentList = "ekhon-onek-rat";
    artist = 'anupam';
    musicPlayer();
    soundPause();
    sound = new Howl({
        src: ['./lib/songs/'+artist+'/'+currentList+'.mp3']
      });
    soundPlay();    
});
$('#minar').click(function(){
    currentList = "keu-kotha-rakheni";
    artist = 'minar';
    musicPlayer();
    soundPause();
    sound = new Howl({
        src: ['./lib/songs/'+artist+'/'+currentList+'.mp3']
      });
    soundPlay();
});
$('#one-direction').click(function(){
    currentList = "night-changes";
    artist = 'one-direction';
    musicPlayer();
    soundPause();
    sound = new Howl({
        src: ['./lib/songs/'+artist+'/'+currentList+'.mp3']
      });
    soundPlay();
});
$('#tahsan').click(function(){
    currentList = "bondhu";
    artist = 'tahsan';
    musicPlayer();
    soundPause();
    sound = new Howl({
        src: ['./lib/songs/'+artist+'/'+currentList+'.mp3']
      });
    soundPlay();
});



$('#play-music').click(function(){
  if($('.player-bar').hasClass("hidden")){
    musicPlayer();
   
    
  }
  else{
    hideMusicPlayer();
  
  }
  $(this).parent().toggleClass('active');
});

$('.current-song').transition('hide');
function soundPlay(){
    sound.play();
    $('#play').addClass('fa-pause');
    $('#play').removeClass('fa-play');
    $('.current-song').transition('pulse');
    $('.current-song').html('<div class="playing"><span>Playing:</span> '+currentList+' by '+artist+'</div>');
}

function soundPause(){
    sound.pause();
    $('#play').removeClass('fa-pause');
    $('#play').addClass('fa-play');
    $('.current-song').transition('pulse');
    $('.current-song').html('<div class="playing"><span>Paused:</span> '+currentList+' by '+artist+'</div>');
}

  //player
$('.play').click(function(){
        if($('#play').hasClass('fa-pause')){
            soundPause();
        }
        else{
            soundPlay();
        }
           
      
});

$(window).scroll(function() { 
  $("main").animate({position:"fixed", easing: 'swing'});
});