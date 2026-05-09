<?php
session_start();

$servername = "localhost";                    
$username = "root";                    
$password = "";                    
$dataBase = "Blog_Content";
            
$connection = new mysqli($servername, $username, $password, $dataBase);
        
if($connection->connect_error) {            
    die("Connection failed: " . $connection->connect_error);            
}
               
date_default_timezone_set('Europe/London');

$month = 'all';

if($_SERVER["REQUEST_METHOD"]== "GET" && isset($_GET['month'])){
    $month = $_GET['month'];
}

$filteredPosts = [];

if(isset($_SESSION['filteredPosts']) && count($_SESSION['filteredPosts']) > 0){
    $posts = $_SESSION['filteredPosts'];
} else {
    $result = $connection->query("SELECT * FROM posts");

    if($result->num_rows > 0){            
        
        $posts = [];            
    
        while($row = $result->fetch_assoc()){           
            $posts[] = $row;                       
        }
    
    
        function sorting(&$posts){                    
            $numberOfPosts = count($posts);

            for($i = 0; $i < $numberOfPosts; $i++){
                for($j = 0; $j <$numberOfPosts - $i - 1; $j++){
                    if(strtotime($posts[$j]['time'])<strtotime($posts[$j + 1]['time'])){
                        $copy = $posts[$j];
                        $posts[$j] = $posts[$j + 1];
                        $posts[$j + 1] =$copy;
                    }
                }
            }
        }

        sorting($posts);

        if($month !== 'all'){
            foreach($posts as $post) {

                if(date('m', strtotime($post['time'])) === $month){
                    $filteredPosts[] = $post;
                }
            }
        } else {
            $filteredPosts = $posts;
        }
        $_SESSION['filteredPosts'] = $filteredPosts;
    } else {
        header("Location: login.php");
    }
}
$connection->close();

if(count($filteredPosts) > 0){
    
    foreach($filteredPosts as $post) {               
        $formattedTime = new DateTime($post['time'], new DateTimeZone('UTC'));                
        $formattedDate = $formattedTime->format('F j, Y, g:i a') . ' UTC';                

        echo '<article class = "blogPost">               
        <h1 class = "title">' . htmlspecialchars($post["title"], ENT_QUOTES, "UTF-8") . '</h1>               
        <p class = "text">' . htmlspecialchars($post["content"], ENT_QUOTES, "UTF-8") . '</p>              
        <aside class = "time">' . $formattedDate . '</aside></article>';            
    }    
} else {           
    echo '<h2> No posts available</h2>';       
}       
?>