<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- aos cdn -->
<!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.6/aos.css" integrity="sha512-hoGlO+71fSG6lgS60I4bKvsFVB+bAnrVFDYlwSXoyNLppDcoupwJB7KbWq/63iACKn3gcgK9jMXd+T+YDeVrGQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">


</head>
<body>
	<header>
	<nav id="navdesktop">
               <div class="menu-icon">
                  <i class="fa fa-bars fa-2x"></i>
               </div>
               <div class="logo">
                  
                 <a href="index.php"><h1> Spirale </h1></a>
      
               </div>
               <div class="menu">
                  <ul>
                     <li><a href="index.php">Home</a></li>
                     <li><a href="about.php">About</a></li>
                     <li><a href="services.php">Services</a></li>
                     <li><a href="contact.php">Contact</a></li>
                        <button class="btn btn-danger" id="logbtn"><i class="fa fa-phone">01202-555999</i></button>
                  </ul>

               </div>

            </nav>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
       <a href="index.php">Home</a>
    <a href="about.php">About</a>
    <a href="services.php">Services</a>
    <a href="contact.php">Contact</a>
  </div>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()" id="ovelayspan">&#9776;  <strong style="color: #ac3537;"> Spirale</strong></span>
	</header>
<div class="slider">
	<div class="myslider"><!-- slider 1 -->
		<div class="txt">
		<h1>IMAGE 1</h1>
		<p>hxjsvaghk<br>vhfwv khvwfv</p>
		</div>
		<img src="image/contact-hero.jpg" style="height:max-content; width: min-content;">
	</div>
	<div class="myslider fade" style="display:block;"><!-- slider 2 -->
		<div class="txt">
		<h1>IMAGE 2</h1>
		<p>hxjsvaghk<br>vhfwv khvwfv</p>
		</div>
		<img src="image/letters-hero.jpg" style="height:max-content; width: min-content;">

	</div>
	<div class="myslider"><!-- slider 3 -->
		<div class="txt">
		<h1>IMAGE 3</h1>
		<p>hxjsvaghk<br>vhfwv khvwfv</p>
		</div>
		<img src="image/hero-about.jpg" style="height:max-content; width: min-content;">
	</div>
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>

<div class="dotsbox" style="text-align:center;">
	<span class="dot" onclick="currentSlide(1)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
	<span class="dot" onclick="currentSlide(2)"></span>
</div>

</div>
<div class="wrapper">
	<div class="contant1" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">	
      <div class="icon-txt">
        
               <h2>
          Spirale can help you with picking<br> out the best people for your company.
           </h2>
      </div>
	</div> 
	<div class="contant1" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">	
		 <div class="icon">
           <span> <i class="fa-brands fa-nfc-directional "></i></span>
      </div>
      <div class="icon-txt">
        
              <h3>People Cohesion</h3>
              <p>
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            </p>
      </div>
	</div> 
	<div class="contant1" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">	
			 <div class="icon" style="background: #ac3537;">
           <span><i class="fa-solid fa-award"></i></span>
      </div>
      <div class="icon-txt">
        
                 <h3 style="color: #ac3537;">Team Leadership</h3>
                                 <p>
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            </p>
      </div>
	</div>
</div> <!-- 1st icon row end -->
<div class="wrapper">
   <div class="contant1" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">	
		 <div class="icon">
           <span><i class="fa-solid fa-users-line"></i></span>

      </div>
      <div class="icon-txt">
        
                      <h3>Team Build Up</h3>
                                 <p>
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            </p>
      </div>
	</div> 
	<div class="contant1" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">	
		 <div class="icon" style="background: #ac3537;">
          <span><i class="fa-solid fa-horse-head"></i></span>

      </div>
      <div class="icon-txt">
        
                       <h3 style="color: #ac3537;">Strategy</h3>
                                 <p>
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            </p>
      </div>
	</div> 
	<div class="contant1" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">	
			 <div class="icon">
            <span><i class="fa-solid fa-anchor"></i></span>
      </div>
      <div class="icon-txt">
        
                      <h3>
Communication</h3>
                                 <p>
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            </p>
      </div>
	</div>
</div><!--  end icon -->

 <div class="wrapper2">
 	<div class="wap-text">
 		  <p>
            GET YOUR TEAM WORKING RIGHT
            </p>
            <h3 style="font-size:30px;"><b style="color:#ac3537;">Improve Your</b><br><strong>Business</strong>
            </h3>
            <p style="text-align:center; font-size: 19px;">
               Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric "outside the box" thinking.
            </p><br>

            <button class="btn btn-danger" id="logbtn" style="margin: 5px;">View more</button>
 	</div>
 	<div class="wap-img">
 		     <img src="image/img-team.png" style="   background-position: center;
  background-repeat: no-repeat; 
  background-size: cover;width: 100%;">
 	</div>              
 </div>
 <div class="wrapper" id="flip-item">
 	<div class="fadeimage1">
 		   <div class="fadetxt">
                  <p>WE ARE THERE FOR YOU</p>
                  <h3> <b style="color:#ac3537;">Avantage<br><strong style="color:black;">
Professionals</strong></b></h3>
</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="image/img-people-01.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <img src="image/img-people-01.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
  </div>
<!--   <p>CHIEF EXECUTIVE
</p>
<h3>Hannah Alberts</h3> -->
</div>
<div class="filptext">
	  <p>CHIEF EXECUTIVE
</p>
<h3>Hannah Alberts</h3>
</div>
 	</div> <!-- end filpcard 1 -->
 	<div class="fadeimage">
 		                <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="image/img-people-02.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <img src="image/img-people-02.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
  </div>
</div> 	
<div class="filptext">
	  <p>CHIEF EXECUTIVE
</p>
<h3>Hannah Alberts</h3>
</div>	
 	</div> <!-- end 2 flip card -->
 	<div class="fadeimage">
        <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="image/img-people-03.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <img src="image/img-people-03.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
  </div>
</div>
<div class="filptext">
	  <p>CHIEF EXECUTIVE
</p>
<h3>Hannah Alberts</h3>
</div> 		 		
 	</div><!-- end 3 flip card -->
 	<div class="fadeimage">
 		         <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="image/img-people-04.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back">
      <img src="image/img-people-04.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
  </div>
</div>

<div class="filptext">
	  <p>CHIEF EXECUTIVE
</p>
<h3>Hannah Alberts</h3>
</div>
 	</div><!-- end 4 flip card -->
 </div><!--  end flip card wrappe -->

 

	
<!-- company logo slide -->

<script>
	const myslide = document.querySelectorAll('.myslider'),
	dot = document.querySelectorAll('.dot');

	let counter =1;
	slidefun(counter);

	let timer = setInterval(autoslide, 8000);
	function autoslide() {
		counter += 1;
		slidefun(counter);
	}
	function plusSlides(n) {
		counter += n;
		slidefun(counter);
		resetTimer(); 
	}
	function currentSlide(n) {
		counter += n;
		slidefun(counter);
		resetTimer(); 
	}

	function resetTimer(){
		 clearInterval(timer);
		 timer = setInterval(autoslide, 8000);
	}


	function slidefun(n){
		let i;
		for (i = 0;  i < myslide.length;i++ ) {
		myslide[i].style.display = "none";
		}
		for (i = 0;  i < dot.length;i++ ) {
			dot[i] .classList.remove('active');
		}
		if(n > myslide.length){
			counter = 1;
		}
		if(n < 1){
			counter = myslide.length;
		}
		myslide[counter - 1].style.display ="block";
		dot[counter - 1].classList.add('active');

	}
 
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- aos js cdn -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.6/aos.js" integrity="sha512-tnNM6PPNOVfZ5sGPw6hThCrcUBeqt2mVEk3EAj8tCtuMHqbuVm5/HsZagrr8W2aaFE+6rKIByGwQbEnmodrYVg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<script>
  				AOS.init();
		</script>

  <script type="text/javascript" src="js/main.js"></script>
</body>
</html>