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
    <div class="shapka">
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'].'/top.php';
        ?>
    </div>

    <div class="page">
        <div class="sidebar_left">
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'].'/sidebar1.php';
            ?>
        </div>

        <div class="content">
		<p></p>
		<br>
        </div>

    </div>

    <div class="footer">
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
        ?>
    </div>
</body>
</html>