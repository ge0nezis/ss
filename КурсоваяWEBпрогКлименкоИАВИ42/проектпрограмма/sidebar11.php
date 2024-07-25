<div class="menu">
<a href="kattov.php">Каталог товаров</a>
</div>
<div class="counter">
<?php 
session_start();
if (!isset($_SESSION['counter']))
{
	echo "Сегодня никто не посещал сайт";
	$_SESSION['counter']=0;
}
else
{
	$_SESSION['counter']++;
	echo "Посетителей: " . $_SESSION['counter'];
}
?>
</div>