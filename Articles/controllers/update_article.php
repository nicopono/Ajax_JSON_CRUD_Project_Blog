

<?php

include_once('../config/config.php');
include_once('../config/class_article.php');


$id = $_POST['id'];
$titledB = $_POST['title1'];
$contentdB = $_POST['content1'];


$connect = new PDO('mysql:dbname='.DBNAME, DBUSER, DBPWD);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request = $connect->prepare("UPDATE article_table
                                 SET title1 = '$titledB' , content1 = '$contentdB' 
                                 WHERE id='$id';");
$request->execute();