<?php 
require "./includes/header.inc.php"; 
?>
<main class="container">
    <?php
    // Hvis bruger logget ind -> send til admin
	session_start();
	if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
		header("location: admin.php");
	} else{ ?>

    <form action="" method="POST">
        <label for="formUsername">Bruger:</label>
        <input type="text" id="formUsername" name="formUsername" placeholder="Brugernavn" required>
        <label for="formPassword">Password:</label>
        <input type="password" id="formPassword" name="formPassword" placeholder="Password" required>
        <input type="submit" value="Log ind" name="submit">
    </form>

    <?php }
	
	

		if(isset($_POST['formUsername']) && isset($_POST['formPassword'])){
			$formUsername = $_POST['formUsername'];
			$formPassword = $_POST['formPassword'];

            //Tjek user i DB: indeholder en gyldig bruger eller den er false
            $user = checkUser($formUsername, $formPassword);
			
			if(!empty($user)){
				session_start();
				$_SESSION['username'] = $formUsername;
				$_SESSION['accessLevel'] = $row['accesslevel'];
				$_SESSION['id'] = $row['id'];
				header("location: admin.php");
			} else{
				echo "<p class='errorMsg'>Kunne ikke finde den kombination af password/brugernavn, prøv igen :-(</p>";
			}
		} 
		?>

</main>
<?php require "./includes/footer.inc.php"; ?>