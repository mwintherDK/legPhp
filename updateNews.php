<?php 
    $al = 2;
    include_once "./includes/adminHeader.inc.php"; 
?>


<?php

$newsArray = getAllNews();
getNewsTable($newsArray);
if(isset($_GET['id'])){
    $updateId = $_GET['id'];
    $toUpdate = getSingleNewsById($updateId);
    generateNewsForm($toUpdate);
}

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $src = $_POST['src'];
    $body = $_POST['body'];
    $updateId = $_GET['id'];

    updateNews($title, $src, $body, $updateId);
}

if(isset($_GET['update'])){
    if($_GET['update'] == "success"){
        echo "<h1>Nyhed opdateret!</h1>";
    }
}
?>




<!-- Når brugeren har redigeret, skal de nye data gemmes i db - altså skal den nyhed overskrives/opdateres -->


<?php include_once "./includes/footer.inc.php"; ?>