<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>






<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

<!-- jQuery first then Bootstrap JS -->


<style type="text/css">
	.slider {       
 			height: max-content;
    display: none;
      overflow: hidden;
      background: #f1f0f5;
      width: 100%;
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
</style>

</head>
<body>
	<div class="container-fluid">
<div class="slider" data-arrows="true" data-autoplay="true">
	<div class="myslider">
		<img src="image/slider/img-slider-14.jpg">
		<button></button>
	</div>
	<div class="myslider">
		<img src="image/slider/img-slider-10.jpg">
		<button></button>
	</div>
	<div class="myslider">
		<img src="image/slider/img-slider-09.jpg">
		<button></button>
	</div>


</div>
</div>
<script>
  jQuery(document).ready(function ($) {
	  $('.slider').slick({
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>