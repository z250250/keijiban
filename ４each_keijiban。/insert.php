<?php
mb_internal_encoding("utf-8");

$pdo = new PDO("mysql:dbname=abe;host=localhost;","root","root");

$pdo->exec("insert into ４each_keijiban。(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/４each_keijiban。/index.php");
?>
