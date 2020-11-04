<!DOCTYPE html>
<html>
<head>
	<title>Tast the Srilankan Cuisine</title>
	<script src="jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	
	<div class="box">
		<div id="arrow-left" class="arrow"></div>
		<div class="inside-box">
			
			
			<h1>අපේ බොජුන්</h1>
			<h3>Taste the Sri Lankan Cousine</h3>
		<!--div class="category">
				<a href="#" id="btnSlideTog">Category</a>
				<div class="category-list">
				<ul>
					<li><a href="#">Sinhaleas</a></li>
					<li><a href="#">Tamil</a></li>
					<li><a href="#">Muslim</a></li>
				</ul>
			</div>
			</div-->

			<!--nav id="navbar">
					<div class="container">
						<ul>
							<li><a href="#">Blog</a></li>
							<li><a href="#login">Login</a></li>
							<li><a href="#main-footer">About</a></li>
							
						</ul>
					</div>
				</nav-->
		</div>
		<ul>
			<li><a>About Us</a></li>
			<li><a>Login</a></li>
			<li><a>Blog</a></li>
			<li><a>Category</a>
				<ul>
					<li><a>Sinhaleas</a></li>
					<li><a>Tamil</a></li>
					<li><a>Muslim</a></li>
				</ul>
			</li>
			
		</ul>

	</div>

	<div class="describe">
		<h1>Welcome</h1>
		<p>a statement that tells you how something or someone looks, sounds, etc. : words that describe something or someone. : type or kind. See the full definition for description in the English Language Learners Dictionary.</p>

		<p>a statement that tells you how something or someone looks, sounds, etc. : words that describe something or someone. : type or kind. See the full definition for description in the English Language Learners Dictionary.</p>
	</div>
			
			
	
	

	<div class="p-box">
	
	
			
		</div>
		
	
</div>
	<div class ="loginbox" id="login">
	<img src = "images/17.jpg" class ="key">
	<h2>Log in here</h2>
	<form method="POST" action="php/login.php">
		<p>User Name</p>
		<input type="text" name="username" placeholder= "Enter Username">
		<p>Password</p>
		<input type="password" name="password" placeholder= "Enter Password"><br><br>
		<a href="signup.php">Create an account</a>
		<input type="submit" name="submit" value="LOGIN">

	</form>
</div>

	
<div class="footer">
	<footer id="main-footer">
		<h2>අපේ බොජුන්</h2>
		<p>Wayamba Universty of Srilanka,Kuliyapitiya</p>

		 <div class="social-list">
		 	<div id="left">
		 	<p>Follow us on:
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <br>
            Contact us:0777348520</p></div>
            <div id="right">
            <p>Email:apebojun@gmail.com<br>
            Fax:0372224503</p>
        </div>
        
        </div>
		<p>Copyright &copy; 2019 Ape Bojun</p>
	</footer>
</div>
	<script>
		$(document).ready(function(){
			$('.category-list').hide();
			$('#btnSlideTog').hover(function(){
				$('.category-list').toggle('fast');
			});
			

		});

		$(function(){
			var width=649;
			var animationSpeed=1000;
			var pause=3000;
			var currentSlide=1;

			var $slider=$('#slider');
			var $slideContainer=$slider.find('.slides');
			var $slides=$slideContainer.find('.slide');

			var interval;

			function startSlider(){
			interval=setInterval(function(){
				$slideContainer.animate({'margin-left': '-='+width},animationSpeed,function(){
					currentSlide++;
					if (currentSlide===$slides.length) {
						currentSlide=1;
						$slideContainer.css('margin-left',0);
					}
				});
			},pause);
		}
		function stopSlider(){
			clearInterval(interval);
		}

			$slider.on('mouseenter',stopSlider).on('mouseleave',startSlider);

		});
	</script>

	<script>
		//Smooth scrolling


		$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

	</script>


</body>
</html>