<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V.E.Chetrusca's Portfolio</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/aboutme.css">
    <link rel="stylesheet" href="css/expertise.css">
</head>
<body class="homepageContainer">

    <?php include('header.php'); ?>

    <main id="home" class = "homepage">
        <section class="mainContainer">
            <h1>Hi, I am Vanesa</h1>
            <p>An Undergraduate student at QMUL</p>
            <div>              
                <button><a href="viewBlog.php" class="blog-button">BLOG</a></button>
                <button><a href="#aboutMe">KNOW MORE</a></button>
            </div>
        </section>
    </main>

    <article class="aboutMeContainer" id="aboutMe">       
        <figure class = "myImage">
            <img src="images/vanesa.png" alt="Vanesa E. Chetrusca">
            <figcaption>Future Computer Scientist </figcaption>        
        </figure>
   
        <section class="aboutMe">            
            <h2>About me</h2>                            
            <p>Computer Science with AI undergraduate student enrolled at Queen Mary, University of London</p>
            <hr>   
            <div class="paragraphContainer">      
                <p>Currently studying Computer Science, my interests are evolving around AI, Machine Learning, and most recently, Quantum Computing. 
                 I am particularly excited about the potential these fields have in shaping the future of science and technology.
                 After graduation, I plan to further enhance my knowledge by pursuing a Master's in AI or a related field to gain a deeper expertise.
                 My ultimate goal is to pursue a PhD, where I can contribute to advancing the ways we tackle real-world complex problems. I am particularly passionate about exploring Quantum Computing and its potential to take us to the next level in scientific discovery.</p>
            </div>
            <hr>
        </section>
    </article>

    <article id="skills" class="skillsContainer">       
        <h2>Skills</h2>        
        <hr>        
        <figure>            
            <img src="images/skills-diagram.png" alt="skills-diagram">              
        </figure>
        <button><a href="projects.php">Projects showcasing my skills</a></button>
    </article>

    <article id="education" class="educationContainer">        
        <h2>Education</h2>        
        <hr>        
        <section>            
            <p>2024-present: BSc Computer Science with Artificial Intelligence- Queen Mary University of London</p>            
            <p>2018-2022: High School- Stefan Odobleja, Bucharest, Romania</p>        
        </section>
    </article>

    <article class="experienceContainer" id="experience">
        <h2>Experience</h2>        
        <hr>
        <section>
            <div>
                <h3>JD Sports(2023-)</h3>
                <figure><img src="images/jdlogo.png" alt="jdlogo"></figure>
            </div>
            <p>Sales Assistant - in addition to consulting customers, I work closely with various technologies, including scanners and inventory management systems, to streamline operations and improve customer service.</p>
        </section>          
    </article>
    
    <?php include('footer.php'); ?>
</body>
</html>