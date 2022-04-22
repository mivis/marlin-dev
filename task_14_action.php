<?php
session_start();
if ($_POST) {
    $email = $_POST['email'];  

    //PDO
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=marlin-edu","root","");
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }

    $sql = "SELECT * FROM users WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' => $email]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);    

    //проверка на наличие email в БД
    if ($user['email'] == $email) {
        //проверка совпадения пароля
        if (password_verify($_POST['password'], $user['password'])) {
            $_SESSION['success'] = "Вход совершен";
            header("Location: task_14_1.php");
            exit;
        }
    }
    //несовпадение email или password
    $_SESSION['error'] = "Неверный логин или пароль";
    header("Location: task_14.php");

    
}
?>