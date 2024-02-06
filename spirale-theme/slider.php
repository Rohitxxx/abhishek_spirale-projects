<style>

.hero {


        height: max-content;
    display: none;
      overflow: hidden;

 
 height: 700px;

}
.hero-text{
 
}

.hero-text h2 {
  margin-bottom: 50px;
}

.hero-text .hero {
  position: relative;
}

.hero-text .hero .hero-slide a:hover span {
  color: #033a71;
}

.hero .hero-slide img {
  width: 100%;
/*  height: 700px;*/
  height: max-content;
  object-fit: cover;
  object-position: top center;
  top: 0;

}

.hero .hero-slide .header-content {
  top: 20%;
  margin-left: 8rem;
  max-width: 550px;
  width: 100%;
  padding: 2rem;
}

.slide-content {
  padding: 10px 20px 10px 0;
}

.slide-content .h1 {
  font-size: 45px;
}

.btn-primary {
  background-color: black;
  border-radius: 0;
}

.slick-dots {
  position: absolute;
  bottom: 10px;
  display: block;
  width: 100%;
  padding: 0;
  list-style: none;
  text-align: center;
}

.slick-dots li {
  position: relative;
  display: inline-block;
  width: 20px;
  height: 20px;
  margin: 0 5px;
  padding: 0;
  cursor: pointer;
}

.slick-dots li button {
  font-size: 0;
  line-height: 0;
  display: block;
  width: 20px;
  height: 20px;
  padding: 5px;
  cursor: pointer;
  border-radius: 50%;
  border: 0;
  outline: none;
}

.slick-dots li button::before {
  font-size: 18px;
  color: #fff;
  opacity: 1;
}

.slick-active button {
  background: #d60e96;
}

/** Text Animation **/

@-webkit-keyframes fadeInUpSD {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100px);
    transform: translateY(100px);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInUpSD {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100px);
    transform: translateY(100px);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInUpSD {
  -webkit-animation-name: fadeInUpSD;
  animation-name: fadeInUpSD;
}

.slick-active .slide-content {
  animation-name: fadeInUpSD;
  animation-duration: 1s;
  opacity: 1;
  width: 100%;
  padding: 10px 20px 30px 0;
}



/*end media query*/
@-webkit-keyframes fadeInUpSD {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100px);
    transform: translateY(100px);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInUpSD {
  0% {
    opacity: 0;
    -webkit-transform: translateY(100px);
    transform: translateY(100px);
  }

  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

.fadeInUpSD {
  -webkit-animation-name: fadeInUpSD;
  animation-name: fadeInUpSD;
}

.slick-active .slide-content {
  animation-name: fadeInUpSD;
  animation-duration: 1s;
  opacity: 1;
  width: 100%;
  padding: 10px 20px 30px 0;
}

  </style>
 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" href="style.css">
<!-- jQuery first then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/media.css">
<header class="hero-text">
  <div class="hero" data-arrows="true" data-autoplay="true">
    <!--.hero-slide-->

    <div class="hero-slide">
      <img alt="" class="img-responsive cover" src="image/slider/img-slider-14.jpg">
      <div class="header-content text-black position-absolute slide-content col-lg-4">
        <h1 class="heading">Be part of the <span class="d-block font-weight-bold">Lunar XPerience</span></h1>
        <a class="btn btn-primary btn-lg w-max mt-2" href="#" tabindex="0">Tour Our Ships</a>
      </div>
    </div>
    <!--.hero-slide-->

    <div class="hero-slide">
      <img alt="Mars Image" class="img-responsive cover" src="image/slider/img-slider-10.jpg" style="height:max-content;">
      <div class="header-content text-black position-absolute slide-content col-lg-4">
        <h1 class="heading">LunarXP Voted Best Mars Mission</h1>
        <p class="font-weight-bold">Inc. magazine today ranked LunarXP as the fastest growing company in the Mars Mission category.</p>
        <a class="btn btn-primary btn-lg w-max mt-2" href="#" tabindex="0">Read More</a>
      </div>
    </div>
    <!--.hero-slide-->

    <div class="hero-slide">
      <img alt="" class="img-responsive cover" src="image/slider/img-slider-09.jpg" >
      <div class="header-content text-black position-absolute slide-content col-lg-4">
        <p>Our fleet of advanced spacecraft have revolutionized the lunar economy and provided safe travel for thousands of scientists, engineers, technicians, medical staff and civilians. These amazing vessels are also paving the way for reaching Mars in the next decade.</p>
        <a class="btn btn-primary btn-lg w-max mt-2" href="#" tabindex="0">Read More</a>
      </div>
    </div>
  </div>
  <!--.hero-->
</header>
<script>
  jQuery(document).ready(function ($) {
	  $('.hero').slick({
		dots: true,
        infinite: false,
        speed: 250,
        fade: !0,
        cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
        autoplay: true,
		autoplaySpeed: 8000,
        draggable: false,
		arrows: false,
		responsive: [
	    {
		breakpoint: 1024,
		settings: {
		slidesToShow: 1,
		slidesToScroll: 1,
        infinite: true
		          }
        },
        {
		breakpoint: 768,
		settings: {
        draggable: true,
		          }
		},
		{
		breakpoint: 600,
		settings: {
        slidesToShow: 1,
        draggable: true,
		slidesToScroll: 1
			      }
		},
		{
		breakpoint: 480,
		settings: {
        slidesToShow: 1,
        draggable: true,
		slidesToScroll: 1
		          }
		}
	
			      ]
                  });
        });
</script>
