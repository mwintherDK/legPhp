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