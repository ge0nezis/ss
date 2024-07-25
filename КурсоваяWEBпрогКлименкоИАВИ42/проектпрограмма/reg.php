<!DOCTYPE html>
<html lang="en">
<?php require_once("config.php"); 
ob_start();
?>
<link rel="stylesheet" href="styles.css">
<head>
<title>Страница на PHP</title>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/head.php';
    ?>
</head>
<body>
        <div class="content1">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <label for="login">Логин:</label><br>
<input type="text" id="login" name="login"><br><br>

<label for="pass">Пароль:</label><br>
<input type="password" id="pass" name="pass"><br><br>
<input type="submit" value="Зарегестрироваться">
</form>
<?php
$login = $_POST['login'];
$pass= $_POST['pass'];
$sql = "INSERT INTO user (login, pass) VALUES ('$login', '$pass')";

if ($conDB->query($sql) === TRUE)
?>
<button><a href="vhh.php">Войти</a></button>
</div>
</body>
</html>