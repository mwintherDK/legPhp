<?php include_once "./includes/header.inc.php"; ?>

<?php
        $allArticlesArray = getAllNews();
        createArticles($allArticlesArray);
        
        // Get food plan data
        $currentFoodplan = getCurrentFoodArray();
        // Print food plan data


    ?>

<?php include_once "./includes/footer.inc.php"; ?>