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
	if(isset($_GET['go'])){
		$id = $_GET['go'];
		$dbh = new PDO("mysql:host=$hn;dbname=$db", $un, $pw);
		$dbh->exec("set names utf8");
		$stm = $dbh->query("SELECT * FROM papers WHERE id=$id");
		$rows = $stm->fetchAll(PDO::FETCH_ASSOC);

		$stm1 = $dbh->query("SELECT * FROM comments c JOIN papers p ON c.paper_id = p.id WHERE p.id=$id");
		$rows1 = $stm1->fetchAll(PDO::FETCH_ASSOC);
	}
	?>
<button class="material-scrolltop" type="button"></button>
<div class="main">
	<div class="container">
		<?php foreach($rows as $row){?>
		<h2><?php echo $row['header']?></h2>
		<?php }?>
	</div>
	
	<img src="SVG/1.jpg" width="100%" height="292px">

	<div class="container">
		<div class="container1">
			<?php foreach($rows as $row){?>
			<p><?php echo $row['full']?></p>
			<?php }?>
		</div><br>

		<h4 class="reg_for" id="question">Комментарий:</h2>
		<form action="php/process.php" method="post">
			<input class="reg_input1" type="input" name="FIO" placeholder="ФИО" required>
			<input class="reg_input1" type="e-mail" name="e-mail" placeholder="Почта" required><br><br>
			<div class="max_textarea">
				<textarea name="question" class="reg_text" placeholder="Пишите тут." required></textarea><br><br>
			<div>
			<input type="hidden" name="id" value="<?php echo $id?>">
			<button class="reg_but2" type="submit" name="send">Отправить</button>
		</form><br><br><br>

		<?php foreach($rows1 as $row){?>
		<hr>
		<div class="comments">
			<h4><?php echo $row['full_name']?></h4>
			<p style="color:#AFAFAF;"><?php echo $row['data']?></p>
			<p><?php echo $row['comment']?></p>
		</div>
		<?php }?>
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
