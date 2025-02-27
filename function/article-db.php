<?php
// db/articles.php
require_once('assets/db/pdo.php');

/**
 * Permet de récupérer tous les articles de la base de données
 * @return array
 */
function getArticles()
{
    global $pdo; // Toujours là
    $sql = "SELECT * FROM article JOIN categorie ON article.categorie_id = categorie.id;";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([]);


    $articles = $stmt->fetchAll();
    return $articles;
}

function getArticlesByTitle()
{
    global $pdo; // Toujours là
    $sql = "SELECT * from article order by title";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([]);


    $articles = $stmt->fetchAll();
    return $articles;
}

function getArticlesById(int $id)
{
    global $pdo; // Toujours là
    $sql = "SELECT * from article WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $id
    ]);


    $articles = $stmt->fetch();
    return $articles;
}

function getArticlesByCategorie(int $id)
{
    global $pdo; // Toujours là
    $sql = "SELECT * from article WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $id
    ]);


    $articles = $stmt->fetch();
    return $articles;
}
