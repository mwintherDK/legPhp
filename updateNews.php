<?php include_once "./includes/header.inc.php"; ?>

<h1>Opdatér nyheder</h1>
<!-- Vis alle artikler med knap til at redigere -->
<?php 
    if(isset($_GET['update'])){
        if($_GET['update'] == "success"){
            echo "<h1>Nyhed opdateret</h1>";
        }
    }
    $allArticlesArray = getAllNews();
    updateArticleTable($allArticlesArray);



    // Hvis brugeren har trykket på en nyhed der skal opdateres finder vi id i URL (GET):
    if(isset($_GET['id'])){
        //Hent relevante id fra url (GET)
        $updateId = $_GET['id'];
        //Find news ud fra ID
        $updateNewsArray = getSingleNewsById($updateId);

        createUpdateTable($updateNewsArray);
    }

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $src = $_POST['src'];
        $body = $_POST['body'];
        $updateId = $_GET['id'];

        updateNews($title, $src, $body, $updateId);
} 


include_once "./includes/footer.inc.php";