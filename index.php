<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP og DB stuff</title>
</head>

<body>
    <?php        
        include_once "./includes/crud.inc.php"; //model?
        include_once "./includes/views.inc.php"; //view
        $allArticlesArray = getAllNews();
        createArticles($allArticlesArray);
        $singleUser = getSingleNewsById(1);
        createArticle($singleUser);
    ?>
</body>

</html>