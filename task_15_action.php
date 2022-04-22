<?php

    //PDO
    try {
    $pdo = new PDO("mysql:host=localhost;dbname=marlin-edu","root","");
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }
 
    file_upload($_FILES['file']['name'], $_FILES['file']['tmp_name'], $pdo);

    function file_upload($fileName, $filePath, $pdo) {
        $fileName = uniqid().'-'.$fileName;
        move_uploaded_file($filePath, "upload/img/".$fileName);
        $sql = "INSERT INTO images (image) VALUES (:image)";
        $statement = $pdo->prepare($sql);
        $statement->execute(['image' => $fileName]);
    }
    header("Location: task_15.php");

?>