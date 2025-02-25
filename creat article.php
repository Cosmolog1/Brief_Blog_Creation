<?php
include_once("component/header.php");
?>


<h2>Creat article</h2>

<div>
    <br>
    <label for="title">Title :</label>
    <input id="title" type="text" name="titre" required>

    <br><br><label for="pseudo">Pseudo :</label>
    <input type="text" name="pseudo" required>

    <br><br><label for="picture">Image :</label>
    <input type="image" name="image" required>

    <br><br>

    <label for="content">Content :</label>
    <textarea id="content" name="contenu"></textarea><br><br>

    <button type="submit">Soumettre</button>
</div>


</form>


<br><br>

<h2>Creat comment</h2>

<div>

    <br><br><label for="pseudo">Pseudo :</label>
    <input type="text" name="pseudo" required>

    <br><br>

    <label for="content">Content :</label>
    <textarea id="content" name="contenu"></textarea><br><br>

    <button type="submit">Soumettre</button>
</div>

<?php
include_once("component/footer.php");
?>