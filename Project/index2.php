<!DOCTYPE html>
<html>
<head>
	<title>Home2</title>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto|Roboto Condensed:700|Roboto:700' rel='stylesheet'>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
  	<link rel="stylesheet" type="text/css" href="js/material-scrolltop.css">
</head>
<body>
	<header>
		<div class="container">
			<nav id="UP">
				<ul class="nav">
					<li class="navList"><a class="nav_font" href="index2.php">DTSI-2019</a></li>
					<div class="nav_right">
						<li><a class="aa" href="#Sections">Sections</a></li>
						<li><a class="aa" href="#Rules">Rules</a></li>
						<li><a class="aa" href="#Conacts">Contacts</a></li>
						<li><a href="blog1.php">Blog</a></li>
						<li><a class="aa" href="index.php">Rus</a></li>
						<li><a class="registration nav_font" href="Registration1.php">Registration</a></li>
					<div>
				</ul>
			</nav>

			<div class="header_text" data-aos="fade-right" data-aos-duration="2000">
				<p>5th International Conference</p>
				<h1>Digital technologies in science and industry - 2019</h1>
				<p>5th international conference from the Organizing Committee dedicated to the 10th anniversary of the International Infromation Technology University.</p><br>
				<a class="registration1" href="Registration1.php">Registration</a>
			</div>
			
			<div class="when" data-aos="fade-right" data-aos-duration="2000">
				<ul class="nav">
						<li>
							<div class="yy">
								<p class="grey">when</p>
								<p>May 30-31 2019</p>
							</div>
						</li>
						<li>
							<div class="yy">
								<p class="grey">where</p>
								<p>International Information Technology University</p>
							</div>
						</li>
						<li>
							<div class="yy">
								<p class="grey">official language</p>
								<p>English</p>
							</div>
						</li>
				</ul>
			</div>
		</div>
	</header>
	<button class="material-scrolltop" type="button"></button>
	<div class="main">
		<div class="container">
			<div class="sections" id="Sections">
				<center>
					<div class="section_header" data-aos="fade-down" data-aos-duration="2000">
						<h2>Sections</h2>
						<p>Within the framework of the conference DTSI-2019 it is planned to discuss various aspects in the field of the application of digital technologies in science, industry, economy and mass media.</p>
					</div>
				</center>

				
				<div data-aos="fade-up" data-aos-duration="2000">
					<table class="sec" style="margin-left: 30px;">
						<tr>
						    <th><img src="SVG/s.svg" width="228px" height="200px"></th>
						    <th><img src="SVG/s1.svg" width="244px" height="226.94px"></th>
						    <th><img src="SVG/s2.svg" width="231px" height="206.73pxpx"></th>
						    <th><img src="SVG/s6.svg" width="231px" height="205.06px"></th>
						</tr>
					</table>
					<table class="sec" style="margin-left: 15px;">
						<tr>
						    <th><img src="SVG/s3.svg" width="310px" height="227px"></th>
						    <th><img src="SVG/s4.svg" width="265px" height="226px"></th>
						    <th><img src="SVG/s5.svg" width="278px" height="219px"></th>
						    <th><img src="SVG/s7.svg" width="278px" height="230px"></th>
						</tr>
					</table>
				</div>
			</div>

		</div>

		<div class="rules" id="Rules">
			<div class="container">
				<center>
					<div class="section_header1" data-aos="fade-down" data-aos-duration="2000">
						<h2>Rules</h2>
						<p>Following the conference, a collection of articles will be published.</p>
					</div>
				</center>

				<div class="rules_info" data-aos="fade-right" data-aos-duration="2000">
					<img src="SVG/rules.svg" class="rule_image" data-aos="fade-left" data-aos-duration="2000" width="414.67px" height="357.64px">
					<div class="r">
						<p class="grey">The official languages of the conference</p>
						<p>English.</p>
					</div>
					<div class="r">
						<p class="grey">Reports (articles) are accepted</p>
						<p>until April 15, 2019.</p>
					</div>
					<div>
						<p class="grey">The registration fee is </p>
						<p>7 000 tenge.</p>
					</div>
				</div>

				<div class="rules_info2" data-aos="fade-left" data-aos-duration="2000">
					<div class="rr">
						<h3>Please provide the following information in the letter:
						</h3>
						<p class="FIO">
						   full name,<br> 
						   e-mail,<br> 
						   phone number,<br> 
						   scientific area (section), 
						   publication name.
						</p>
					</div>

					<div class="rr">
						<h3>Please name the file as follows : </h3>
						<p>DTSI-2019_Соrresponded Author Surnames_The name of article.doc</p>
					</div>
					<div>
						<p>Requirements for sample reports:</p><br>
						<a href="Documents/Requirements.docx" class="registration2" download>Download Sample</a>
					</div><br>
					<div>
						<p>Payment details:</p><br>
						<a href="Documents/Payment.jpg" class="registration2" download>Download Details</a>
					</div>
				</div>
				<div class="reg_form" data-aos="zoom-out" data-aos-duration="2000">
					<center>
						<h2 class="reg_for" id="question">Feedback</h2>
						<form action="php/mail_send.php" method="post" id="fedback">
							<input class="reg_input" type="input" name="FIO" placeholder="Full name" required>
							<input class="reg_input" type="e-mail" name="e-mail" placeholder="Email" required><br><br>
							<div class="max_textarea">
								<textarea name="question" class="reg_text" placeholder="Write here." required></textarea><br><br>
							<div>
							<button class="reg_but" type="submit">Send</button>
						</form>
						<p class="m">The registration fee of the conference participant is 7000 tenge.</p>
					</center>
					<img src="SVG/reg.svg" class="n" data-aos="zoom-in-left" data-aos-duration="2000" width="465.31px" height="306.8px">
				</div>
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
	<script>
		$("#fedback").submit(function(e){
			e.preventDefault();
			$( "#fedback" ).replaceWith( $("<h2 data-aos=\"zoom-in\" data-aos-duration=\"2000\">Your question was successfully sent!</h2>")
				);
			$("#question").hide();
		});
	</script>
</body>
</html>