<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dataBase = "User_Credentials";

$connection = new mysqli($servername, $username, $password, $dataBase);

if($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$error_msg = "";

if($_SERVER["REQUEST_METHOD"]== "POST"){ 
    $user_name = $_POST['username'];
    $user_password = $_POST['password'];

    $stmt = $connection->prepare("SELECT email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $user_name);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($db_username, $db_password);
    
    
    if($stmt->num_rows > 0) {
        $stmt->fetch();
        if($user_password === $db_password){
            $_SESSION['username'] = $user_name;
            $_SESSION['logged_in'] = true;
            header("Location: addEntry.php");
            exit();
        }else {
            $error_msg = "Invalid username or password";
        }  
    }else{
        $error_msg = "Invalid username or password"; 
    }
    $stmt->close();
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
    <script src = "javascript/login.js" defer></script>
</head>
<body>
    <?php include('header.php'); ?>

    <main class="loginContainer">
        <div class="glass">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id = "loginForm">
                <h1>Login</h1>  
                <input type="email" id="username" name="username" placeholder="Email">
                <input type="password" id="password" name="password" placeholder="Password" 
                minlength="8" title="Password must be at least 8 characters long">
                <?php if($error_msg): ?>
                <p class = "error"><?php echo $error_msg; ?></p>
                <?php endif; ?>    
                <button type="submit">Login</button>
            </form>
        </div>
    </main>

    <footer>
        <p>
            <span>© V.E. Chetrusca</span>
        </p>
    </footer>
</body>
</html>