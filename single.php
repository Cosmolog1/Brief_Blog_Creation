<?php
require_once("function/article-db.php");
require_once("function/comment-db.php");
$id = $_GET["id"];
$article = getArticlesById($id);
$comments = getCommentsByArticle($id);

include_once("component/header.php");
?>


<h1>Single article</h1>


<div class="card-body">
    <img src="./asset/image/<?php echo $article["image"] ?>">
    <h5 class="card-title"> <?php echo $article["title"] ?></h5>
    <p class="card-text"> <?php echo $article['content'] ?></p>
</div>

<section>
    <!-- // afficher les commentaires de l'article qui sont dans $comments -->

</section>



<?php
include_once("component/footer.php");
?>