<?php
require_once("function/article-db.php");
$articles = getArticles();
include_once("component/header.php");
?>




<h1>Archive</h1>



<div class="row g-3">

    <?php

    foreach ($articles as $key => $article): ?>

        <div class="col-lg-4 col-md-6">
            <div class="card">
                <?php

                include("component/card.php") ?>

            </div>
        </div>

    <?php
    endforeach;

    ?>


</div>



<?php
include_once("component/footer.php");
?>