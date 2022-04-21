<?php
session_start();
$text = $_POST['text'];

//PDO
try {
    $pdo = new PDO('mysql:host=localhost;dbname=marlin-edu',"root","");  
}
catch (PDOException $e) {
    echo $e->getMessage();
}

$sql = "SELECT * FROM task_9 WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$test_text = $statement->fetchAll(PDO::FETCH_ASSOC);

if(!empty($test_text)) {
    $_SESSION['error'] = "Данный текст уже добавлен в базу";
    header("Location: task_10.php");
    exit;
}


$sql = "INSERT INTO task_9 (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

header("Location: task_10.php");
?>