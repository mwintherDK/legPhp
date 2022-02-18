<?php
session_start();
include "./includes/header.inc.php";

// Check om session eksisterer - hvis IKKE -> login.php
if(!isset($_SESSION['username'])){
    header("location: login.php?err=notloggedIn");
} else{
    if($al == 1){
        if($_SESSION['accessLevel'] != 1){
            // Evt med en fejlbesked
            header("location: login.php");
        }
    } else if ($al == 2){
        if($_SESSION['accessLevel'] == 1 || $_SESSION['accessLevel'] == 2){
            // Evt med en fejlbesked
            header("location: login.php");
        }
    } 
}
?>
<header>
    <div class="container">

        <h1>Admin side</h1>
        <nav class="admin">
            <ul class="flex">
                <li><a href="createNews.php">Lav nyhed</a></li>
                <li><a href="updateNews.php">Opdatér nyhed</a></li>
                <li><a href="deleteNews.php">Slet nyhed</a></li>
                <li><a href="createFoodPlan.php">Lav madplan</a></li>
                <li><a href="updateFoodPlan.php">Opdatér madplan</a></li>
                <li><a href="deleteFoodPlan.php">Slet madplan</a></li>
                <li><a href="logout.php">Log ud</a></li>
            </ul>
        </nav>
    </div>
</header>