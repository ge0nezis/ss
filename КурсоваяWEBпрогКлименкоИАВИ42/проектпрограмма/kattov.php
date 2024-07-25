<!DOCTYPE html>
<html lang="en">
<?php require_once("config.php"); 
ob_start();
?>
<link rel="stylesheet" href="styles.css">
<head>
<title>Страница на PHP</title>
<p><img src="304cdff294ed22b7fb1e2c616d857ac7.jpg"></p>
    <?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/head.php';
    ?>
</head>
<body>
    <div class="shapka">
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'].'/topkattov.php';
        ?>
    </div>
        <div class="content2">
<h3>Выберите интересующие Вас товары:</h3>
<form action="kattov.php" method="post">
<label for="proc">Процессоры</label>
<input type="checkbox" id="proc" name="proc"><br><br>
<label for="video">Видеокарты</label>
<input type="checkbox" id="video" name="video"><br><br>
<label for="mat">Материнские платы</label>
<input type="checkbox" id="mat" name="mat"><br><br>
<label for="ozu">Оперативная память</label>
<input type="checkbox" id="ozu" name="ozu"><br><br>
<input type="submit" value="Показать">
</form>
<?php
if(isset($_POST['proc'])){
    $sql = "SELECT * FROM tov WHERE name = 'proc'";
    $result = $conDB->query($sql);
while($row = $result->fetch_assoc()) {
if ($result->num_rows > 0) {
	echo '<div>' . $row["nazv"] . '<br>' . $row["izo"] . '<br>' . "Количество " . $row["kol-vo"] . '<br>' . '<button>Добавить в корзину</button> <br>' . '</div>';
}
}
}
if(isset($_POST['video'])){
    $sql = "SELECT * FROM tov WHERE name = 'vid'";
    $result = $conDB->query($sql);
while($row = $result->fetch_assoc()) {
if ($result->num_rows > 0) {
	echo '<div>' .$row["nazv"] . '<br>' . $row["izo"] . '<br>' .  "Количество " . $row["kol-vo"] . '<br>' . '<button>Добавить в корзину</button> <br>' . '</div>';
}
}
}
if(isset($_POST['mat'])){
    $sql = "SELECT * FROM tov WHERE name = 'mat'";
    $result = $conDB->query($sql);
while($row = $result->fetch_assoc()) {
if ($result->num_rows > 0) {
	echo '<div>' .$row["nazv"] . '<br>' . $row["izo"] . '<br>' .  "Количество " . $row["kol-vo"] . '<br>' . '<button>Добавить в корзину</button> <br>' . '</div>';
}
}
}
if(isset($_POST['ozu'])){
    $sql = "SELECT * FROM tov WHERE name = 'ozu'";
    $result = $conDB->query($sql);
while($row = $result->fetch_assoc()) {
if ($result->num_rows > 0) {
	echo '<div>' .$row["nazv"] . '<br>' . $row["izo"] . '<br>' . "Количество " . $row["kol-vo"] . '<br>' . '<button>Добавить в корзину</button> <br>' . '</div>';
}
}
}
?>
        </div>
    </div>

    <div class="footer">
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
        ?>
    </div>
</body>
</html>