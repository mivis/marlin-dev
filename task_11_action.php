<?php
session_start();
if ($_POST) {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    //PDO
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=marlin-edu',"root","");
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }

    //SQL
    $sql = "SELECT * FROM users WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' => $email]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    //проверка на дубль имэйла
    if (!empty($user)) {
        $_SESSION['email_error'] = "Этот эл адрес уже занят другим пользователем";
        header("Location: task_11.php");
        exit;
    }

    //добавление в БД
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' => $email, 'password' => $password]);
    header("Location: task_11.php");
}
?>