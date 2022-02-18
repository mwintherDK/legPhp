<?php
    function createArticles($arr){
        foreach ($arr as $value) {
            createArticle($value);
        }
    }
    function createArticle($user){       
        echo "<article>";
        echo "<h1>".$user['title']."</h1>";
        echo "<img src='".$user['src']."' alt='adasdad' />";
        echo "<p>".$user['body']."</p>";
        echo "</article>";      
    }
// 
// News
// 

function getNewsTable($newsArray){

    ?>
<table class="updateArticle container">
    <?php
        foreach ($newsArray as $news) { ?>
    <tr>
        <td><?= $news['title'] ?></td>
        <td><?= $news['src'] ?></td>
        <td><?= $news['body'] ?></td>
        <td> <a href="updateNews.php?id=<?= $news['id'] ?>">Opdatér nyhed</a></td>
    </tr>
    <?php
            
        }
        ?>
</table>
<?php
}

function generateNewsForm($toUpdate){ ?>

<form action="" method="POST">
    <label for="title">Titel:</label>
    <input name="title" id="title" type="text" placeholder="Title" value="<?= $toUpdate['title'] ?>">
    <label for="src">Src:</label>
    <input name="src" id="src" type="text" placeholder="Src" value="<?= $toUpdate['src'] ?>">
    <label for="body">Body:</label>
    <textarea name="body" id="body" cols="30" rows="10"><?= $toUpdate['body'] ?></textarea>
    <button name="submit" value="submit">Indsæt</button>
</form>

<?php
}