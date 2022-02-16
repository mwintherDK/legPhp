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

function updateArticleTable($arr){ ?>
<table class="updateArticle container">
    <?php 
            foreach ($arr as $item) { ?>
    <tr>
        <td><?= $item['title']; ?></td>
        <td><?= $item['src']; ?></td>
        <td><?= substr($item['body'], 0, 100); ?></td>
        <td><a href="updateNews.php?id=<?= $item['id']; ?>">Opdatér artikel</a></td>
    </tr>
    <?php    
            }
        ?>
</table>

<?php
    }

function createUpdateTable($arr){ ?>

<form id="news" action="" method="POST">
    <label for="title">Titel:</label>
    <input name="title" id="title" type="text" placeholder="Title" value="<?= $arr['title']; ?>">
    <label for="src">Src:</label>
    <input name="src" id="src" type="text" placeholder="Src" value="<?= $arr['src']; ?>">
    <label for="body">Body:</label>
    <textarea name="body" id="body" cols="30" rows="10"><?= $arr['body']; ?></textarea>
    <button name=" submit" value="submit">Indsæt</button>
</form>
<?php } 