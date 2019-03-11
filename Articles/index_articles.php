<?php

include_once('./config/config.php');

function PostAllarticle_table() {

    $connect = new PDO('mysql:dbname='.DBNAME, DBUSER, DBPWD);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $request = $connect->prepare("SELECT * FROM article_table");

    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}
$article_tables = PostAllarticle_table(); 

?>


<!DOCTYPE html>
<html>
<head>
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

                <button type="button" onclick="create()">Create</button> 
                <button type="button" onclick="update()">Update</button>
            </form>

    <div id="parentNewArticle">
        <h2>Articles:</h2>


//*! ------Revoir FOREACH-------*/

            <?php foreach ($article_tables as $key => $article_table): ?>
            <p>
                <?php echo $article_table['titledB']."--".$article_table['contentdB'] ?>
                
            </p>
            <?php endforeach; ?>
                
    </div>
    </section>   
</body>
</html>

