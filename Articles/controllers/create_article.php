
<?php

include_once('../config/config.php');
include_once('../config/class_article.php');

$titledB = $_POST['title1'];
$contentdB = $_POST['content1'];

    $connect = new PDO('mysql:dbname='.DBNAME, DBUSER, DBPWD);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $request = $connect->prepare("INSERT INTO article_table (titledB, contentdB) 
                                    VALUES ('$titledB','$contentdB');");


    $request->execute();

?>