<?php 
include 'nav.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Блог</title>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto|Roboto Condensed:700|Roboto:700' rel='stylesheet'>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
  	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
  	<link rel="stylesheet" type="text/css" href="js/material-scrolltop.css">

</head>
<body>
	<?php 
	include "php/login.php";
	$dbh = new PDO("mysql:host=$hn;dbname=$db", $un, $pw);
	$dbh->exec("set names utf8");
	$stm = $dbh->query("SELECT * FROM comments");
	$rows = $stm->fetchAll(PDO::FETCH_ASSOC);

	$stm1 = $dbh->query("SELECT * FROM papers");
	$rows1 = $stm1->fetchAll(PDO::FETCH_ASSOC);
	?>

<button class="material-scrolltop" type="button"></button>
<div class="main">
	<div class="container">
		<h2>Интересные записи</h2>
		<div data-aos="fade-left" data-aos-duration="2000">
			<input class="search" type="text" name="search" placeholder="Поиск"><br><br><br>
			<div class="short_info1">
				<h4>Последние комментарии</h4>
				<div class="hhh">
					<?php foreach($rows as $row) {?>
					<a href="#"><?php printf("{$row['comment']}");?></a>
					<hr>
					<?php }?>	
				</div>
			</div>

			<?php foreach($rows1 as $row1){?>
			<div class="blog_news">
				<div class="b_info">
					<h4><?php printf("{$row1['header']}");?></h4>
					<p><?php printf("{$row1['short']}");?></p>
					<p><?php printf("{$row1['data']}");?></p>
				</div>
				<a href="full_b.php?go=<?php echo $row1['id']?>"><img src="SVG/1.jpg"></a>	
			</div><br>
			<?php }?>
		</div>
	</div>
</div>
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
</body>
</html>

<?php
include 'footer.php'
?>
<!-- SELECT * FROM comments c JOIN papers p ON c.paper_id = p.id WHERE p.id=1 -->