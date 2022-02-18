<?php
    $al = 3;
    require_once "./includes/adminHeader.inc.php"; ?>

<form id="foodplan" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="week">Ugedag (vælg en dag i ugen):</label>
    <input name="week" id="week" type="date" placeholder="Vælg en dag i ugen" min="2022-01-01" max="2025-12-31">
    <label for="mon">Mandag:</label>
    <input name="mon" id="mon" type="text" placeholder="Mandag">
    <label for="tue">Tirsdag:</label>
    <input name="tue" id="tue" type="text" placeholder="Tirsdag">
    <label for="wed">Onsdag:</label>
    <input name="wed" id="wed" type="text" placeholder="Onsdag">
    <label for="thu">Torsdag:</label>
    <input name="thu" id="thu" type="text" placeholder="Torsdag">
    <label for="fri">Fredag:</label>
    <input name="fri" id="fri" type="text" placeholder="Fredag">
    <button name="submit" value="submit">Indsæt</button>
</form>

<?php
    if(isset($_POST['submit'])){
        $week = $_POST['week'];
        $mon = $_POST['mon'];
        $tue = $_POST['tue'];
        $wed = $_POST['wed'];
        $thu = $_POST['thu'];
        $fri = $_POST['fri'];
        $userId = 1;
        setFoodplan($week, $mon, $tue, $wed, $thu, $fri, $userId);
    }