<?php
mb_internal_encoding("utf8");

$pdo = new PDO('mysql:dbname=lesson01;host=localhost:3306;','root','root');

$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/site01/4each_keijiban/index.php");

?>