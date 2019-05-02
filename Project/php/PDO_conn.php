<?php
$pdo = new PDO('mysql:host=localhost;dbname=onlineshop','root', '');
foreach( $pdo->query("SELECT * FROM products") as $row )
{   
	print_r($row);
	echo "<br />"; 
}
?>
