<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link href="https://fonts.googleapis.com/css?family=Lato|Nanum+Gothic:700|Raleway&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet">

        <link rel="stylesheet" href="StyleScrollAnimation.css"/>        

        <title>Scroll Animation</title>
        <style type="text/css">
            
            body {
    padding:0;
    margin:0
}

section {
    padding-bottom: 50px;
}

.main-heading {
    text-align: center;
    font-family: roboto;
    font-family:'Raleway', sans-serif;    
    font-weight: 400;
    font-size: 35px;
}

.dummy-text {
    padding: 0 50px;
    text-align: justify;
    line-height: 1.5;
    font-size: 20px;
    font-family: roboto;
}

.animation {
    width: 300px;
    height: 150px;
    color: black;
    font-family: 'Raleway', sans-serif;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    margin-top: 80vh;
    background-image: -webkit-gradient(linear, left top, right bottom, from(#009688), to(#CDDC39));
    background-image: linear-gradient(to bottom right, #009688, #CDDC39);
    
    -webkit-box-shadow: 0px 5px 12px 5px rgba(0,0,0,0.2);
    -ms-box-shadow: 0px 5px 12px 5px rgba(0,0,0,0.2);
    -o-box-shadow: 0px 5px 12px 5px rgba(0,0,0,0.2);
    box-shadow: 0px 5px 12px 5px rgba(0,0,0,0.2);
}

    .animation span {
        line-height: 6;
        font-size: 23px;
        background: blue;
        color: black;
    }

/*All Animations*/
.zoom-in {
    -webkit-transform: scale(0);
    transform: scale(0);

    -webkit-transition: all .8s ease-in-out;
    transition: all .8s ease-in-out;
}

.zoom-out {
    opacity:0;
    visibility: hidden;

    -webkit-transform: scale(1.8);
    transform: scale(1.8);

    -webkit-transition: all .8s ease-in-out;
    transition: all .8s ease-in-out;
}

.fade-in {
    opacity:0;
    visibility: hidden;

    -webkit-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
}

.fade-in-right {
    opacity:0;
    visibility: hidden;
    
    -webkit-transform: translateX(50px);
    transform: translateX(50px);
    
    -webkit-transition: all .8s ease-in-out;
    transition: all .8s ease-in-out;
}

.fade-in-left {
    opacity:0;
    visibility: hidden;

    -webkit-transform: translateX(-50px);
    transform: translateX(-50px);

    -webkit-transition: all .8s ease-in-out;
    transition: all .8s ease-in-out;
}

.fade-in-up {
    opacity:0;
    visibility: hidden;

    -webkit-transform: translateY(50px);
    transform: translateY(50px);
    
    -webkit-transition: all .8s ease-in-out;
    transition: all .8s ease-in-out;
}

.fade-in-down {
    opacity:0;
    visibility: hidden;
    
    -webkit-transform: translateY(-50px);
    transform: translateY(-50px);
    
    -webkit-transition: all .8s ease-in-out;
    transition: all .8s ease-in-out;
}

.rotate {
    opacity:0;
    visibility: hidden;
    
    -webkit-transform: translateY(360px);
    transform: translateY(360px);
    
    -webkit-transition: all .8s ease-in-out;
    transition: all .8s ease-in-out;
}

.rotate-zoom-in {
    opacity:0;
    visibility: hidden;

    -webkit-transform: rotate(720) scale(0);
    transform: rotate(720) scale(0);
    
    -webkit-transition: all .8s ease-in-out;
    transition: all .8s ease-in-out;
}

.rotate-zoom-out {
    opacity:0;
    visibility: hidden;

    -webkit-transform: rotate(720) scale(2);
    transform: rotate(720) scale(2);
    
    -webkit-transition: all .8s ease-in-out;
    transition: all .8s ease-in-out;
}

.flip-up {
    opacity:0;
    visibility: hidden;
    
    -webkit-transform: rotateX(180deg);
    transform: rotateX(180deg);
    
    -webkit-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
}

.flip-in-right {
    opacity:0;
    visibility: hidden;
    
    -webkit-transform: rotateX(0deg) translateX(300px);
    transform: rotateX(0deg) translateX(300px);
    
    -webkit-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
}

.flip-in-left {
    opacity:0;
    visibility: hidden;
    
    -webkit-transform: rotateX(0deg) translateX(-300px);
    transform: rotateX(0deg) translateX(-300px);
    
    -webkit-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
}

.flip-down-right {
    opacity:0;
    visibility: hidden;
    
    -webkit-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
    
    -webkit-animation: down-right 1.3s;
    animation: down-right 1.3s;    
}

.reset-down-right {
    -webkit-animation: reset-down-right 1.3s;
    animation: reset-down-right 1.3s;
}

@-webkit-keyframes down-right {
    0% {-webkit-transform: rotate(45deg) rotateX(90deg);transform: rotate(45deg) rotateX(90deg);}
    50% {-webkit-transform: rotate(45deg) rotateX(0deg);transform: rotate(45deg) rotateX(0deg);}    
    100% {-webkit-transform: rotate(0deg) rotateX(0deg);transform: rotate(0deg) rotateX(0deg);}
}
@keyframes down-right {
    0% {-webkit-transform: rotate(45deg) rotateX(90deg);transform: rotate(45deg) rotateX(90deg);}
    50% {-webkit-transform: rotate(45deg) rotateX(0deg);transform: rotate(45deg) rotateX(0deg);}    
    100% {-webkit-transform: rotate(0deg) rotateX(0deg);transform: rotate(0deg) rotateX(0deg);}
}
 
@-webkit-keyframes reset-down-right {
    0% {-webkit-transform: rotate(0deg) rotateX(0deg);transform: rotate(0deg) rotateX(0deg);}
    50% {-webkit-transform: rotate(45deg) rotateX(0deg);transform: rotate(45deg) rotateX(0deg);}    
    100% {-webkit-transform: rotate(45deg) rotateX(90deg);transform: rotate(45deg) rotateX(90deg);}
}
@keyframes reset-down-right {
    0% {-webkit-transform: rotate(0deg) rotateX(0deg);transform: rotate(0deg) rotateX(0deg);}
    50% {-webkit-transform: rotate(45deg) rotateX(0deg);transform: rotate(45deg) rotateX(0deg);}    
    100% {-webkit-transform: rotate(45deg) rotateX(90deg);transform: rotate(45deg) rotateX(90deg);}
}

.flip-down-left {
    opacity:0;
    visibility: hidden;
    
    -webkit-transition: all 1s ease-in-out;
    transition: all 1s ease-in-out;
    
    -webkit-animation: down-left 1.3s;
    animation: down-left 1.3s;    
}

.reset-down-left {
    -webkit-animation: reset-down-left 1.3s;
    animation: reset-down-left 1.3s;
}

@-webkit-keyframes down-left {
    0% {-webkit-transform: rotate(-45deg) rotateX(90deg);transform: rotate(-45deg) rotateX(90deg);}
    50% {-webkit-transform: rotate(-45deg) rotateX(0deg);transform: rotate(-45deg) rotateX(0deg);}    
    100% {-webkit-transform: rotate(0deg) rotateX(0deg);transform: rotate(0deg) rotateX(0deg);}
}
@keyframes down-left {
    0% {-webkit-transform: rotate(-45deg) rotateX(90deg);transform: rotate(-45deg) rotateX(90deg);}
    50% {-webkit-transform: rotate(-45deg) rotateX(0deg);transform: rotate(-45deg) rotateX(0deg);}    
    100% {-webkit-transform: rotate(0deg) rotateX(0deg);transform: rotate(0deg) rotateX(0deg);}
}
 
@-webkit-keyframes reset-down-left {
    0% {-webkit-transform: rotate(0deg) rotateX(0deg);transform: rotate(0deg) rotateX(0deg);}
    50% {-webkit-transform: rotate(-45deg) rotateX(0deg);transform: rotate(-45deg) rotateX(0deg);}    
    100% {-webkit-transform: rotate(-45deg) rotateX(90deg);transform: rotate(-45deg) rotateX(90deg);}
}
@keyframes reset-down-left {
    0% {-webkit-transform: rotate(0deg) rotateX(0deg);transform: rotate(0deg) rotateX(0deg);}
    50% {-webkit-transform: rotate(-45deg) rotateX(0deg);transform: rotate(-45deg) rotateX(0deg);}    
    100% {-webkit-transform: rotate(-45deg) rotateX(90deg);transform: rotate(-45deg) rotateX(90deg);}
}

.drop-bounce {
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
}
  
@-webkit-keyframes drop {
    0% {-webkit-transform: translateY(-100px);transform: translateY(-100px);}
    100% {-webkit-transform: translateY(0px);transform: translateY(0px);}
} 
@keyframes drop {
    0% {-webkit-transform: translateY(-100px);transform: translateY(-100px);}
    100% {-webkit-transform: translateY(0px);transform: translateY(0px);}
}

@-webkit-keyframes bounce {
    0%, 53%, 80%, 100% {
      -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
      transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
      -webkit-transform: translate3d(0,0,0);
      transform: translate3d(0,0,0);
    }
  
    40%, 43% {
      -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
      transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
      -webkit-transform: translate3d(0, -30px, 0);
      transform: translate3d(0, -30px, 0);
    }
  
    70% {
      -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
      transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
      -webkit-transform: translate3d(0, -15px, 0);
      transform: translate3d(0, -15px, 0);
    }
  
    90% {-webkit-transform: translate3d(0,-4px,0);transform: translate3d(0,-4px,0);}
}
@keyframes bounce {
    0%, 53%, 80%, 100% {
      -webkit-transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
      transition-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
      -webkit-transform: translate3d(0,0,0);
      transform: translate3d(0,0,0);
    }
  
    40%, 43% {
      -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
      transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
      -webkit-transform: translate3d(0, -30px, 0);
      transform: translate3d(0, -30px, 0);
    }
  
    70% {
      -webkit-transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
      transition-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
      -webkit-transform: translate3d(0, -15px, 0);
      transform: translate3d(0, -15px, 0);
    }
  
    90% {-webkit-transform: translate3d(0,-4px,0);transform: translate3d(0,-4px,0);}
}

@-webkit-keyframes goTop {
    0% {-webkit-transform: translate3d(0,0,0);transform: translate3d(0,0,0);}
    100% {-webkit-transform: translate3d(0,-100px,0);transform: translate3d(0,-100px,0);}
}
@keyframes goTop {
    0% {-webkit-transform: translate3d(0,0,0);transform: translate3d(0,0,0);}
    100% {-webkit-transform: translate3d(0,-100px,0);transform: translate3d(0,-100px,0);}
}
        </style>

    </head>

    <body>
        
        <section>
            
            <h1 class="main-heading">Scroll Animation</h1> 
            
            <div class="dummy-text">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br/><br/>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<br/><br/>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.<br/><br/>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
            </div>

            <div class="animation zoom-in" style="margin-top:5vh">
                <span>Zoom-in</span>
            </div>
            
            <div class="animation zoom-out">
                <span>Zoom-out</span>
            </div>

            <div class="animation fade-in">
                <span>Fade-in</span>
            </div>
            
            <div class="animation fade-in-right">
                <span>Fade-in-right</span>
            </div>

            <div class="animation fade-in-left">
                <span>Fade-in-left</span>
            </div>

            <div class="animation fade-in-up">
                <span>Fade-in-up</span>
            </div>

            <div class="animation fade-in-down">
                <span>Fade-in-down</span>
            </div>            
            
            <div class="animation rotate">
                <span>Rotate</span>
            </div>

            <div class="animation rotate-zoom-in">
                <span>Rotate Zoom In</span>
            </div>

            <div class="animation rotate-zoom-out">
                <span>Rotate Zoom Out</span>
            </div>            

            <div class="animation flip-up">
                <span>Flip Up</span>
            </div>

            <div class="animation flip-in-right">
                <span>Flip In Right</span>
            </div>

            <div class="animation flip-in-left">
                <span>Flip In Left</span>
            </div>

            <div class="animation flip-down-right">
                <span>Flip Down Right</span>
            </div>

            <div class="animation flip-down-left">
                <span>Flip Down Left</span>
            </div>

            <div class="animation drop-bounce">
                <span>Drop Down</span>
            </div>

        </section>
        <script type="text/javascript">
            $(window).scroll(function(){
    
    //Zoom-in
    $('.zoom-in').each(function(){        
        var zoomIn = 1, zoomOut = 0;
        
        if(isScrolledIntoView($(this))){        
            $(this).css({
                '-webkit-transform': 'scale(' + zoomIn + ')',
                'transform': 'scale(' + zoomIn + ')'
            });
        }
        
        else{
            $(this).css({
                '-webkit-transform': 'scale(' + zoomOut + ')',
                'transform': 'scale(' + zoomOut + ')'
            });
        }
    });

    //Zoom-out
    $('.zoom-out').each(function(){        
        var zoomIn = 1, zoomOut = 1.8;
        
        if(isScrolledIntoView($(this))){        
            $(this).css({
                'opacity':'1',
                'visibility':'visible',
                '-webkit-transform': 'scale(' + zoomIn + ')',
                'transform': 'scale(' + zoomIn + ')'
            });
        }
        
        else{
            $(this).css({
                'opacity':'0',
                'visibility':'hidden',
                '-webkit-transform': 'scale(' + zoomOut + ')',
                'transform': 'scale(' + zoomOut + ')'
            });
        }
    });

    //Fade-in
    $('.fade-in').each(function(){        
        
        if(isScrolledIntoView($(this))){        
            $(this).css({
                'opacity':1,
                'visibility':'visible'
            });
        }
        
        else{
            $(this).css({
                'opacity':0,
                'visibility':'hidden'
            });
        }

        //Fade-in-right
        $('.fade-in-right').each(function(){        
            var point = "0px", side = "50px";
            
            if(isScrolledIntoView($(this))){        
                $(this).css({
                    'opacity':1,
                    'visibility':'visible',
                    '-webkit-transform': 'translateX(' + point + ')',
                    'transform': 'translateX(' + point + ')'                    
                });
            }
            
            else{
                $(this).css({
                    'opacity':0,
                    'visibility':'hidden',
                    '-webkit-transform': 'translateX(' + side + ')',
                    'transform': 'translateX(' + side + ')'                    
                });
            }
        });

        //Fade-in-left
        $('.fade-in-left').each(function(){        
            var point = "0px", move = "-50px";
            
            if(isScrolledIntoView($(this))){        
                $(this).css({
                    'opacity':1,
                    'visibility':'visible',
                    '-webkit-transform': 'translateX(' + point + ')',
                    'transform': 'translateX(' + point + ')'                    
                });
            }
            
            else{
                $(this).css({
                    'opacity':0,
                    'visibility':'hidden',
                    '-webkit-transform': 'translateX(' + move + ')',
                    'transform': 'translateX(' + move + ')'                    
                });
            }
        });

        //Fade-in-up
        $('.fade-in-up').each(function(){        
            var point = "0px", move = "50px";
            
            if(isScrolledIntoView($(this))){        
                $(this).css({
                    'opacity':1,
                    'visibility':'visible',
                    '-webkit-transform': 'translateY(' + point + ')',
                    'transform': 'translateY(' + point + ')'                    
                });
            }
            
            else{
                $(this).css({
                    'opacity':0,
                    'visibility':'hidden',
                    '-webkit-transform': 'translateY(' + move + ')',
                    'transform': 'translateY(' + move + ')'                    
                });
            }
        });

        //Fade-in-down
        $('.fade-in-down').each(function(){        
            var point = "0px", move = "-50px";
            
            if(isScrolledIntoView($(this))){        
                $(this).css({
                    'opacity':1,
                    'visibility':'visible',
                    '-webkit-transform': 'translateY(' + point + ')',
                    'transform': 'translateY(' + point + ')'                   
                });
            }
            
            else{
                $(this).css({
                    'opacity':0,
                    'visibility':'hidden',
                    '-webkit-transform': 'translateY(' + move + ')',
                    'transform': 'translateY(' + move + ')'                    
                });
            }
        });

        //Rotate
        $('.rotate').each(function(){        
            var zero = "0deg", angle = "360deg";
            
            if(isScrolledIntoView($(this))){        
                $(this).css({
                    'opacity':1,
                    'visibility':'visible',
                    '-webkit-transform': 'rotate(' + zero + ')',
                    'transform': 'rotate(' + zero + ')'                    
                });
            }
            
            else{
                $(this).css({
                    'opacity':0,
                    'visibility':'hidden',
                    '-webkit-transform': 'rotate(' + angle + ')',
                    'transform': 'rotate(' + angle + ')'                    
                });
            }
        });

        //Rotate Zoom in
        $('.rotate-zoom-in').each(function(){        
            var zero = "0deg", angle = "720deg", zoomIn = 1, zoomOut = 0;
            
            if(isScrolledIntoView($(this))){        
                $(this).css({
                    'opacity':1,
                    'visibility':'visible',                    
                    '-webkit-transform': 'rotate('+zero+') scale(' + zoomIn + ')',
                    'transform': 'rotate('+zero+') scale(' + zoomIn + ')'
                });
            }
            
            else{
                $(this).css({
                    'opacity':0,
                    'visibility':'hidden',                    
                    '-webkit-transform': 'rotate('+angle+') scale(' + zoomOut + ')',
                    'transform': 'rotate('+angle+') scale(' + zoomOut + ')'
                });
            }
        });

        //Rotate Zoom out
        $('.rotate-zoom-out').each(function(){        
            var zero = "0deg", angle = "720deg", zoomIn = 2, zoomOut = 1;
            
            if(isScrolledIntoView($(this))){        
                $(this).css({
                    'opacity':1,
                    'visibility':'visible',                    
                    '-webkit-transform': 'rotate('+zero+') scale(' + zoomOut + ')',
                    'transform': 'rotate('+zero+') scale(' + zoomOut + ')'
                });
            }
            
            else{
                $(this).css({
                    'opacity':0,
                    'visibility':'hidden',                    
                    '-webkit-transform': 'rotate('+angle+') scale(' + zoomIn + ')',
                    'transform': 'rotate('+angle+') scale(' + zoomIn + ')'
                });
            }
        });

        //Flip Up
        $('.flip-up').each(function(){        
            var zero = "0deg", angle = "180deg";
            
            if(isScrolledIntoView($(this))){        
                $(this).css({
                    'opacity':1,
                    'visibility':'visible',
                    '-webkit-transform': 'rotateX(' + zero + ')',
                    'transform': 'rotateX('+zero+')'
                });
            }
            
            else{
                $(this).css({
                    'opacity':0,
                    'visibility':'hidden',
                    '-webkit-transform': 'rotateX(' + angle + ')',
                    'transform': 'rotateX('+angle+')'
                });
            }
        });

        //Flip In Right
        $('.flip-in-right').each(function(){        
            var zero = "0deg", angle = "360deg", point = 0, move = "300px";
            
            if(isScrolledIntoView($(this))){        
                $(this).css({
                    'opacity':1,
                    'visibility':'visible',
                    '-webkit-transform': 'rotateX('+angle+')translateX(' + point + ')',
                    'transform': 'rotateX('+angle+') translateX(' + point + ')'                    
                });
            }
            
            else{
                $(this).css({
                    'opacity':0,
                    'visibility':'hidden',
                    '-webkit-transform': 'rotateX('+zero+')translateX(' + point + ')',
                    'transform': 'rotateX('+zero+') translateX(' + move + ')'
                });
            }
        });

        //Flip In Left
        $('.flip-in-left').each(function(){        
            var zero = "0deg", angle = "360deg", point = 0, move = "-300px";
            
            if(isScrolledIntoView($(this))){        
                $(this).css({
                    'opacity':1,
                    'visibility':'visible',
                    '-webkit-transform': 'rotateX('+angle+')translateX(' + point + ')',
                    'transform': 'rotateX('+angle+') translateX(' + point + ')'                    
                });
            }
            
            else{
                $(this).css({
                    'opacity':0,
                    'visibility':'hidden',
                    '-webkit-transform': 'rotateX('+zero+')translateX(' + point + ')',
                    'transform': 'rotateX('+zero+') translateX(' + move + ')'
                });
            }
        });

        //Flip Down Right
        $('.flip-down-right').each(function(){        
            var atime = "1.3s", x = "10s"
            
            if(isScrolledIntoView($(this))){        
                $(this).css({
                    'opacity':1,
                    'visibility':'visible',
                    '-webkit-animation': 'down-right '+atime+'',
                    'animation': 'down-right '+atime+''
                });
            }
            
            else{
                $(this).css({
                    'opacity':0,
                    'visibility':'hidden',
                    '-webkit-animation': 'reset-down-right '+atime+'',
                    'animation': 'reset-down-right '+atime+''
                });
            }
        });

        //Flip Down Left
        $('.flip-down-left').each(function(){        
            var atime = "1.3s", x = "10s"
            
            if(isScrolledIntoView($(this))){        
                $(this).css({
                    'opacity':1,
                    'visibility':'visible',
                    '-webkit-animation': 'down-left '+atime+'',
                    'animation': 'down-left '+atime+''
                });
            }
            
            else{
                $(this).css({
                    'opacity':0,
                    'visibility':'hidden',
                    '-webkit-animation': 'reset-down-left '+atime+'',
                    'animation': 'reset-down-left '+atime+''
                });
            }
        });

        //Drop Bounce
        $('.drop-bounce').each(function(){        
            var dropTime = ".3s", x = "1s", y = ".35s";
            
            if(isScrolledIntoView($(this))){
                $(this).css({
                    'animation':'drop'+dropTime+' forwards, bounce ' +x+ ' ' +y+ ''
                });
            }
            
            else{
                $(this).css({
                    'animation': 'goTop '+x+''
                });
            }
        });

    });
});
  
function isScrolledIntoView(elem){
    var $elem = $(elem);
    var $window = $(window);
  
    var docViewTop = $window.scrollTop();
    var docViewBottom = docViewTop + $window.height();
  
    var elemTop = $elem.offset().top;
    var elemBottom = elemTop + $elem.height();
  
    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="ScriptScrollAnimation.js"></script>        
    </body>
</html>