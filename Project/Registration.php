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
	<header>
		<div class="container">
			<nav id="UP" data-aos="fade-down" data-aos-duration="2000">
				<ul class="nav">
					<li class="navList"><a class="nav_font" href="index.php">DTSI-2019</a></li>
					<div class="nav_right">
						<li><a href="#Sections">Секции</a></li>
						<li><a href="#Rules">Правила</a></li>
						<li><a href="#Conacts">Контакты</a></li>
						<li><a href="blog.php">Блог</a></li>
						<li><a href="Registration1.php">Анг</a></li>
						<li><a class="registration nav_font" href="#Registration">Регистрация</a></li>
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
					<p>5-ая Международная конференция</p>
					<div class="h1_text">
						<h1>Цифровые технологии в науке и индустрии – 2019</h1>
					</div>
					<div class="when2">
						<div>
							<p class="grey">где</p>
							<p>Международный университет информационных технологий</p>
						</div>

						<div>
							<p class="grey">подробности по телефону</p>
							<p>+7 701 730 5195</p>
						</div>
					</div>
					<div class="when1">
						<div>
							<p class="grey">когда</p>
							<p>30 - 31 мая 2019 года </p>
						</div>

						<div>
							<p class="grey">взнос</p>
							<p>7 000 тг</p>
						</div>
					</div>
				</div>
			</div>
			<div class="registration_form" data-aos="fade-right" data-aos-duration="2000">
				<form action="php/idata.php" method="post">
					<div class="bottom_50">
						<h2>Регистрационная форма</h2>
						<h3>Личные данные</h3>
						<label for="last_name">Фамилия</label>
						<input class="reg_input" type="text" name="last_name" id="last_name" required><br><br>
						<label for="first_name">Имя</label>
						<input class="reg_input" type="text" name="first_name" id="first_name" required><br><br>
						<label for="second_name">Отчество</label>
						<input class="reg_input" type="text" name="second_name" id="second_name" required>
					</div>
					<div class="bottom_50">
						<h3>Контактные данные</h3>
						<label for="phone">Номер телефона</label>
						<input class="reg_input" type="text" name="phone_number" id="phone" required><br><br>
						<label for="mail">Почта</label>
						<input class="reg_input" type="mail" name="e_mail" id="mail" required>
					</div>
					<div class="bottom_50">
						<h3>Опыт работы</h3>
						<label for="work">Место работы</label>
						<input class="reg_input" type="text" name="work" id="work" required><br><br>
						<label for="position">Должность</label>
						<input class="reg_input" type="text" name="position" id="position" required>
					</div>	
					<div class="bottom_50">
						<h3>Информация о статьи</h3>
						<label for="country">Страна</label>
						<input class="reg_input" type="text" name="country" id="country" required><br><br>
						<label for="section">Секция</label>
					    <select class="reg_select" id="section" name="section">
					      <option value="1">Интеллектуальные системы</option>
					      <option value="2">Инфокоммуникационные сети и кибербезопасность</option>
					      <option value="3">Цифровыее технологии в экономике и менеджменте</option>
					      <option value="9">Наука о данных и машинное обучение</option>
					      <option value="4">Разработка программного обеспечения и инженерия знаний</option>
					      <option value="5">Мир языка: теория, практика, инновации</option>
					      <option value="6">Цифровые технологии в масс-медиа</option>
					      <option value="7">Химико-технологические науки и экология. Нефтегазовая инженерия</option>
			   			</select>
					</div>
					<button class="reg_but1" type="submit" name = "send" class="registration1"> Отправить</button>
				</form>
			</div>
		</div>
	</div>

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