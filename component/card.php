<img src="./asset/image/<?php echo $article["image"] ?>">
<div class="card-body">
    <h5 class="card-title"> <?php echo $article["title"] ?></h5>
    <p class="card-text"> <?php echo $article['resumer'] ?></p>
    <p class="card-text"> <?php echo $article['category_name'] ?></p>
    <a href="single.php?id=<?php echo $article['id']; ?>" target="_blank">Article complet</a>
    <br><br>
</div>