<?php

    //PDO
    try {
    $pdo = new PDO("mysql:host=localhost;dbname=marlin-edu","root","");
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }
    for ($i=0; $i < count($_FILES['file']['name']); $i++) {
        file_upload($_FILES['file']['name'][$i], $_FILES['file']['tmp_name'][$i], $pdo);
    }
    function file_upload($fileName, $filePath, $pdo) {
        $fileName = uniqid().'-'.$fileName;
        move_uploaded_file($filePath, "upload/img/".$fileName);
        $sql = "INSERT INTO images (image) VALUES (:image)";
        $statement = $pdo->prepare($sql);
        $statement->execute(['image' => $fileName]);
    }
    header("Location: task_15_2.php");

?>