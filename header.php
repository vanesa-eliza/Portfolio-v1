<?php
session_start();
?>
<link rel="stylesheet" href="css/header.css">
<header class="headerContainer">
    <div>
        <a href="index.php"><img src="images/logo.png" alt="logo"></a>
        <p>Vanesa E. Chetrusca</p>
    </div>
    <div class="nav-container">
        <div class = "menu"> ☰ </div>
        <nav class = "nav-bar">
            <ul>
                <li><a href="index.php#home">Home</a></li>                       
                <li><a href="index.php#aboutMe">About me</a></li>                        
                <li><a href="index.php#skills">Skills</a></li>                        
                <li><a href="index.php#education">Education</a></li> 
                <li><a href="index.php#experience">Experience</a></li>             
                <li><a href="viewBlog.php">Blog</a></li>  
                <?php
                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true ){
                    echo '<li class = "user-menu">
                        <a href = "#" class = "icon"><img src = "images/user.jpg" alt = "user"></a>
                        <ul class = "dropdown">
                            <li><a href = "logout.php" id = "logout">Logout</a></li>
                        </ul></li>';
                    echo '<script src = "javascript/logout.js"></script>';
                } else {
                    echo '<li><button><a href="login.php">log in</a></button></li>';}              
                ?>
            </ul>
        </nav>
    </div>
</header>


