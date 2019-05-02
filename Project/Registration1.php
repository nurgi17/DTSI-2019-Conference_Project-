<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto|Roboto Condensed:700|Roboto:700' rel='stylesheet'>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
  	<link rel="stylesheet" type="text/css" href="js/material-scrolltop.css">
</head>
<body>
	<header>
		<div class="container">
			<nav id="UP" data-aos="fade-down" data-aos-duration="2000">
				<ul class="nav">
					<li class="navList"><a class="nav_font" href="index2.php">DTSI-2019</a></li>
					<div class="nav_right">
						<li><a href="#Sections">Sections</a></li>
						<li><a href="#Rules">Rules</a></li>
						<li><a href="#Conacts">Contacts</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="Registration.php">Rus</a></li>
						<li><a class="registration nav_font" href="#Registration">Registration</a></li>
					<div>
				</ul>
			</nav>
		</div>
	</header>
	<button class="material-scrolltop" type="button"></button>
	<div class="main">
		<div class="container">
			<div class="short_info" data-aos="fade-left" data-aos-duration="2000">
				<div class="short">
					<p>5th International Conference</p>
					<div class="h1_text">
						<h1>Digital technologies in science and industry - 2019</h1>
					</div>
					<div class="when2">
						<div>
							<p class="grey">где</p>
							<p>International Information Technology University</p>
						</div>

						<div>
							<p class="grey">details by phone</p>
							<p>+7 701 730 5195</p>
						</div>
					</div>
					<div class="when1">
						<div>
							<p class="grey">when</p>
							<p>May 30-31 2019</p>
						</div>

						<div>
							<p class="grey">registration fee</p>
							<p>7 000 tg</p>
						</div>
					</div>
				</div>
			</div>
			<div class="registration_form" data-aos="fade-right" data-aos-duration="2000">
				<form action="php/idata1.php" method="post">
					<div class="bottom_50">
						<h2>Registration from</h2>
						<h3>Personal data</h3>
						<label for="last_name">Last name</label>
						<input class="reg_input" type="text" name="last_name" id="last_name" required><br><br>
						<label for="first_name">First name</label>
						<input class="reg_input" type="text" name="first_name" id="first_name" required><br><br>
						<label for="second_name">Second name</label>
						<input class="reg_input" type="text" name="second_name" id="second_name" required>
					</div>
					<div class="bottom_50">
						<h3>Contact details</h3>
						<label for="phone">Phone number</label>
						<input class="reg_input" type="text" name="phone_number" id="phone" required><br><br>
						<label for="mail">Е-mail</label>
						<input class="reg_input" type="mail" name="e_mail" id="mail" required>
					</div>
					<div class="bottom_50">
						<h3>Work experience</h3>
						<label for="work">Place of work</label>
						<input class="reg_input" type="text" name="work" id="work" required><br><br>
						<label for="position">Position</label>
						<input class="reg_input" type="text" name="position" id="position" required>
					</div>	
					<div class="bottom_50">
						<h3>Article information</h3>
						<label for="country">Country</label>
						<input class="reg_input" type="text" name="country" id="country" required><br><br>
						<label for="section">Sections</label>
					    <select class="reg_select" id="section" name="section" required>
					      <option value="1">Smart systems</option>
					      <option value="2">Infocommunication networks and cybersecurity</option>
					      <option value="3">Digital technologies in economics and management</option>
					      <option value="9">Data Science & Machine Learning</option>
					      <option value="4">Software engineering and knowledge engineering</option>
					      <option value="5">Language learning and teaching: theory, practice and innovations</option>
					      <option value="6">Digital Media Technologies</option>
					       <option value="7">Chemical technology and ecology. Oil and gas engineering</option>
					    </select>				    
					</div>
					<button class="reg_but1" type="submit" name = "send" class="registration1"> Send</button>
				</form>
			</div>
		</div>
	</div>

	<footer data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="2000">
		<div class="container">
			<div class="contact" id="Conacts">
				<h4>Contacts</h4>
				<p>Yevgeniya Daineko
				yevgeniyadaineko@gmail.com
			    +7 701 730 5195</p>
			    <img src="SVG/logo.svg" width="113px" height="39px">
			</div>
			<div class="attention">
				<h4>ATTENTION!</h4>
				<p>Articles are published in the editorial office of the author and must be prepared in compliance with the requirements of the attached template.</p>
				<p>The organizing committee reserves the right to reject articles not complying with the formatting requirements and/or containing well-known information.</p>
			</div>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/smooth_scroll.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="js/material-scrolltop.js"></script>
    <script>
        $(document).ready(function() {
            $('body').materialScrollTop({
                revealElement: 'header',
                revealPosition: 'bottom',
                onScrollEnd: function() {
                    console.log('Scrolling End');
                }
            });
        });
    </script>
	<script>
		AOS.init();
	</script>
</body>
</html>