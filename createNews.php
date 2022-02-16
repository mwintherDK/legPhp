<?php include_once "./includes/header.inc.php"; ?>

<?php if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $src = $_POST['src'];
    $body = $_POST['body'];

    echo "<p>" . insertNews($title, $src, $body) . "</p>";
} ?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="title">Titel:</label>
    <input name="title" id="title" type="text" plceholder="Title">
    <label for="src">Src:</label>
    <input name="src" id="src" type="text" plceholder="Src">
    <label for="body">Body:</label>
    <input name="body" id="body" type="text" plceholder="Body">
    <button name="submit" value="submit">Indsæt</button>
</form>

<?php

    ?>

<?php include_once "./includes/footer.inc.php"; ?>