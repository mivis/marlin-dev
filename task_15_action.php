<?php
if ($_FILES) {
    //PDO
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=marlin-edu","root","");
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }

    $fileName = uniqid().'-'.$_FILES['file']['name'];
    $filePath = "upload/img/".$fileName;
    move_uploaded_file($_FILES['file']['tmp_name'], $filePath);

    $sql = "INSERT INTO images (image) VALUES (:image)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['image' => $fileName]);
    header("Location: task_15.php");
}
?>