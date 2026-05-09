<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Blog</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/blogform.css">
    <script src="javascript/postBlog.js" defer></script>
</head>
<body>
    <?php include('header.php'); ?>

    <main class="glass">
        <div class="blogFormContainer" >
            <form action="addPost.php" method="post" id="formBox">
                <h1>Blog entry</h1>
                <input type="text" id="title" name="title" placeholder="Title" value="<?php echo isset($_SESSION['title']) ? htmlspecialchars($_SESSION['title'], ENT_QUOTES, 'UTF-8') : ''; unset($_SESSION['title']);
             ?>">
                <textarea placeholder="New post..." class="postBox" id="content" name="content"><?php echo isset($_SESSION['content']) ? htmlspecialchars($_SESSION['content'], ENT_QUOTES, 'UTF-8') : '';unset($_SESSION['content']); ?></textarea>
                <div class="buttonContainer">
                    <button type="submit" id="submit" name = "submit">Post</button>
                    <button type="submit" id = "preview" name = "preview">Preview</button>
                    <button type="button" id="resetButton">Reset</button>
                </div> 
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
