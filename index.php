<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--- bootstrap, css --->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="styling.css">
        <script src="script.js"></script>

        <title>Sky Moodslider</title>
        <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    </head>
    <body>
        
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm  text-dark">
        <div class="navbar-brand card" style="width: 150px;" >
            <img class="card-img" src="images/logo.jpg" alt="Sky Logo">
        </div>             
        <div class="collapse navbar-collapse flex-column " id="navbarCollapse">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <h1>Sky Movie Recommender</h1>
                </li>               
            </ul>
            <ul class="navbar-nav mr-auto mb-1">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Moodslider</a>
                </li>                
                <div class="row m-2">|</div>               
                <li class="nav-item">
                    <a class="nav-link" href="uploadContent.php">Upload Content</a>
                
                </li>
            </ul>
         </div>
</nav>
        <br>

        <div class="container">
           <?php
            require_once 'frontPage.php';?>
        </div>
        
    </body>
</html>