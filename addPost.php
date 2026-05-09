<?php

session_start();

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !==true) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dataBase = "Blog_Content";

$connection = new mysqli($servername, $username, $password, $dataBase);

if($connection->connect_error){
    die("Connection failed: " . $connection->connect_error);
}

date_default_timezone_set('Europe/London');

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['preview'])){
    $_SESSION['title'] = $_POST['title'];
    $_SESSION['content'] = $_POST['content'];
    header("Location: viewBlog.php#preview");
    exit();
}

if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])) {
    
    $title = $_POST['title'];
    $content = $_POST['content'];
    $datetime = date('Y-m-d H:i:s');

    $stmt = $connection->prepare("INSERT INTO posts(title, content, time) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $content, $datetime);

    if($stmt->execute()){
        unset($_SESSION['title']);
        unset($_SESSION['content']);
        header("Location: viewBlog.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $connection->close();
} else {
    echo "Invalid request.";
}


?>