<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/project.css">
    <script src="javascript/carousel.js" defer></script>
</head>
<body>
    <?php include('header.php'); ?>

    <h1>Welcome to my Projects</h1>

    <article>
        <h2><strong>Project Title</strong>: Database Management System for a bookstore called "Librarius"</h2>
        <section class = "projectDescription">
            <p>A school project I had to do to showcase my expertise in SQL and database design by developing a fully functional database system using Oracle Apex.</p>                    <h3>Key features and SQL implementation:</h3>        
            <p><strong>Database scheme Design</strong>: Structured entities including products, categories, books, authors, customers, suppliers, sales and invoices using ERD modeling.</p>                
            <p><strong>Data Manipulation</strong>: I used SQL(DDL, DML) to create tables, insert data and manage records.</p>                
            <p><strong>Advanced Queries</strong>: Implemented JOINs, subqueries and aggregate functions.</p>                
            <p><strong>Sorting and Filtering</strong>: Optimised searches using WHERE, ORDER BY and Group BY clauses.</p>            
        </section>      
        
        <div class="carouselContainer">                
            <div class="carousel">
                <figure>                            
                    <img src="images/ERD-MySQL.png" alt="SQL project ER diagram">
                    <figcaption>ERD of the database</figcaption>
                </figure>
                <figure>
                    <img src="images/SQLtables.png" alt="SQLtables">
                    <figcaption>Exemples of table created for the project</figcaption>
                </figure>
                <figure>                            
                    <img src="images/deleating a row.png" alt="deleating a row">
                    <figcaption>Alterating a table by deleating a row</figcaption>
                </figure>
                <figure>
                    <img src="images/updating.png" alt="updating a row">
                    <figcaption>Alterating a table by updating a row</figcaption>
                </figure>
                <figure>                            
                    <img src="images/GROUPBy.png" alt="grouping">
                    <figcaption>Making use of Group By clause</figcaption>
                </figure>
                <figure>
                    <img src="images/ORDERby.png" alt="ORDER">
                    <figcaption>Making use of Order clause</figcaption>
                </figure>
                <figure>
                    <img src="images/JOIN.png" alt="JOIN clause">
                    <figcaption>Making use of Join clause</figcaption>
                </figure>
            </div>
            <div class="buttons">
                <button id="prev" class="button-left">❮</button>
                <button id="next" class="button-right">❯</button>                    
            </div>
        </div>
    </article>

    <?php include('footer.php'); ?>
</body>
</html>