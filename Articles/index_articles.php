<?php

// include_once ('C:\wamp64\www\GitHub\Project_Blog\Articles\index_articles.php');

?>


<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="articles_ajax.js"></script>

</head>
<body>
    <section>
        <h2>New Article:</h2>
            <form>
                Title:<br>
                <input id="title" type="text">
            <br><br>
                Content:<br>
                <textarea id="content" cols="25" rows="5"></textarea>
            <br><br>

                <button type="button" onclick="createArticle()">Create</button> 
                <button type="button" onclick="updateArticle()">Update</button>
            </form>

    <div id="parentNewArticle">
        <h2>Articles:</h2>

        <?php 
        include_once ('C:\wamp64\www\GitHub\Project_Blog\Articles\controllers\show_all_articles.php'); ?>



        <?php foreach ($article_tables as $key => $article_x): ?>
        <p>
            <?php echo $article_x['titledB']."--".$article_x['contentdB'] ?>

            <button onclick="readArticle(<?php echo $article_x['id'] ?>)">Read</button>
            <button onclick="deleteArticle()">Delete</button>
            
        </p>
        <?php endforeach;  ?>
            
    </div>
    </section>   
</body>
</html>

