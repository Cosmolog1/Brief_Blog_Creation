<?php
require_once("function/article-db.php");
$position = $_GET["position"];
$articles = getArticlesById($position);

include_once("component/header.php");
?>


<h1>Single article</h1>


<div class="card-body">
    <img src="./asset/image/<?php echo $articles["image"] ?>">
    <h5 class="card-title"> <?php echo $articles["title"] ?></h5>
    <p class="card-text"> <?php echo $articles['content'] ?></p>

</div>



<?php
include_once("component/footer.php");
?>