<?php
$text = $_POST['text'];

//PDO
try {
    $pdo = new PDO('mysql:host=localhost;dbname=marlin-edu',"root","");  
}
catch (PDOException $e) {
    echo $e->getMessage();
}

$sql = "INSERT INTO task_9 (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

header("Location: task_9.php");
?>