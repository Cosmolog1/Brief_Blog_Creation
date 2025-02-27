<img src="./asset/image/<?php echo $article["image"] ?>">
<div class="card-body">
    <h5 class="card-title"> <?php echo $article["title"] ?></h5>
    <p class="card-text"> <?php echo $article['resumer'] ?></p>
    <p class="card-text"> <?php echo $article['name'] ?></p>
    <a href="single.php?position=<?php echo $article['id']; ?>" target="_blank">Article complet</a>
</div>