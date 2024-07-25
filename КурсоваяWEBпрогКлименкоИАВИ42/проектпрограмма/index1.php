<!DOCTYPE html>
<html lang="en">
<?php require_once("config.php"); 
ob_start();
?>
<link rel="stylesheet" href="styles.css">
<head>
<title>Страница на PHP</title>
<p><a href="sk1.php"><img src="304cdff294ed22b7fb1e2c616d857ac7.jpg"></p></a>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/head.php';
    ?>
</head>

<body>
    <div class="shapka">
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'].'/top1.php';
        ?>
    </div>

    <div class="page">
        <div class="sidebar_left">
            <?php
            require_once $_SERVER['DOCUMENT_ROOT'].'/sidebar11.php';
            ?>
        </div>

        <div class="content">
        <h3>Популярные категории </h3>
		<p> <img src="nn.png"></p><p><img src="ss.png"></p><p><img src="pp.png"></p>
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