<?php
if ($_POST) {
    //PDO
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=marlin-edu","root","");
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }

    $image = $_POST['image'];

    $sql = "DELETE FROM images WHERE image=:image";
    $statement = $pdo->prepare($sql);
    $statement->execute(['image' => $image]);

    unlink("upload/img/".$image);
    header("Location: task_15.php");
}
?>