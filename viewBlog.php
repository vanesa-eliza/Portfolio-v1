<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/blog.css">
</head>
<body>
    <?php include('header.php'); ?>

    <main class ="blogContainer">
        <div class ="glass">
            <?php 
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){
                echo '<h1>Welcome Back<h1>
                <h2>Want to write a new post</h2>
                <button><a href="addEntry.php">New blog</a></button>';
            }else{
                echo '<h1>Welcome to the blog</h1>
                <h2>Want to write a new post</h2>
                <button><a href="login.php">New blog</a></button>';
            } 
            ?>           
        </div>
    </main>

    <h3>Latest posts</h3>

    <div class = "postsContainer">
        <aside class = "filterContainer">
            <div class="filterWrapper">
                <button class="filter">Filter</button>
                <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "get" class = "filterForm">
                    <select name="month" id="month" class = "dropdown_menu">
                        <option value="all">All Posts</option>                            
                        <option value="01">January</option>                                          
                        <option value="02">February</option>                            
                        <option value="03">March</option>                           
                        <option value="04">April</option>                           
                        <option value="05">May</option>            
                        <option value="06">June</option>            
                        <option value="07">July</option>            
                        <option value="08">August</option>            
                        <option value="09">September</option>            
                        <option value="10">October</option>            
                        <option value="11">November</option>            
                        <option value="12">December</option>   
                    </select>
                    <button type = "submit" class = "saveChanges">Apply Filter</button>
                </form>   
            </div>
        </aside>

        <div class = "postWrapper">
            <?php
            $Title = htmlspecialchars($_SESSION["title"], ENT_QUOTES, "UTF-8");
            $Content = htmlspecialchars($_SESSION["content"], ENT_QUOTES, "UTF-8");

            if(isset($_SESSION['title']) && isset($_SESSION['content'])){
            
                $formattedDate = date('F j, Y, g:i a') . ' UTC';
            
                echo '<div class = "previewContainer"><h2 id = "preview">Preview</h2><article class = "blogPost">            
                <h1 class = "title">' . $Title . '</h1>            
                <p class = "text">' . $Content . '</p>            
                <aside class="time">' . $formattedDate . '</aside></article>
                    
                <div class = "previewBC"><button><a href = "addEntry.php">Edit</a></button>            
                <form action="addPost.php" method="post">           
                <input type="hidden" name="title" value="' . $Title . '">            
                <input type="hidden" name="content" value="' . $Content. '">           
                <button type="submit" name="submit">Post</button>            
                </form></div></div>';        
            }
                   
            if(isset($_SESSION['filteredPosts'])){
                $filteredPosts = $_SESSION['filteredPosts'];
                unset($_SESSION['filteredPosts']);
            } else {
                $filteredPosts = [];
            }

            include('blog.php');
            
            ?>
        </div>
    </div>
    
    <?php include('footer.php'); ?>
</body>
</html>

