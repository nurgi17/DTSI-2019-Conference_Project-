<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto|Roboto Condensed:700|Roboto:700' rel='stylesheet'>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
  	<link rel="stylesheet" type="text/css" href="js/material-scrolltop.css">
</head>
<body>
	<footer data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-duration="2000">
		<div class="container">
			<div class="foo_border">
				<div class="contact" id="Conacts">
					<h4>Контакты</h4>
					<p>Евгения Дайнеко
					yevgeniyadaineko@gmail.com
				    +7 701 730 5195</p>
				    <img src="SVG/logo.svg" width="113px" height="39px">
				</div>
				<div class="attention">
					<h4>ВНИМАНИЕ!</h4>
					<p>Статьи публикуются в редакции автора и должны быть оформлены с соблюдением требований прилагаемого шаблона. </p>
					<p>Оргкомитет оставляет за собой право отклонить материалы, оформленные не по шаблону и\или содержащие общеизвестную информацию.</p>
				</div>
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