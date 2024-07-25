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
<input type="submit" value="Войти">
</form>
<?php
    if (isset($_POST['login'])) {
$pass = $_POST['pass'];
$sql = "SELECT * FROM user WHERE pass = $pass";
$result = $conDB->query($sql);
if ($result->num_rows > 0) {
echo '<a href="index1.php"">Добро пожаловать</a>';
}
}
?>
<button><a href="index.php">На главную</a></button>
</div>
</body>
</html>