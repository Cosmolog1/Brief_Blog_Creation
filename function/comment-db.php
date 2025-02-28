<?php
// db/articles.php
require_once('assets/db/pdo.php');


function getCommentsByArticle(int $articleId): array
{
    global $pdo; // Toujours là
    $sql = "SELECT *
    FROM comment
    WHERE article_id = :article_id
    ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':article_id' => $articleId,
    ]);

    $comments = $stmt->fetchAll();
    return $comments;
}
