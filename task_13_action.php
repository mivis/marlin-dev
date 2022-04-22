<?php
session_start();

//не делал отдельный файл-форму, а сделал свои атрибуты name для кнопок
// обнуление счетчика
if ($_POST['reset']) {
    unset($_SESSION['counter']);
    header("Location: task_13.php");
    exit;
}

// прибавление к счетчику, без условия
$_SESSION['counter'] = (int)$_SESSION['counter'] + 1;
header("Location: task_13.php");
?>