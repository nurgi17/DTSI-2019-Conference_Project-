<?php
include "login.php";

if (isset($_POST['send'])){
  if (isset($_POST['FIO']) && isset($_POST['e-mail']) && isset($_POST['question']) && isset($_POST['id'])){
    $fio = $_POST['FIO'];
    $e_mail = $_POST['e-mail'];
    $comment = $_POST['question'];
    $paper_id = $_POST['id'];
    $data = date("Y-m-d");

try {
    $conn = new PDO("mysql:host=$hn;dbname=$db", $un, $pw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO comments (full_name, e_mail, comment, data, paper_id) VALUES (?,?,?,?,?)";
	$conn->prepare($sql)->execute([$fio, $e_mail, $comment, $data, $paper_id]);
    echo "New record created successfully";
    header("location: ../full_b.php?go=$paper_id");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
}
?>		