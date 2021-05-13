 <?php
    include('db_connect.php');
    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Webshop met een leuke naam</title>
     
 </head>

 <body>
     <header>
     <div id="header_logo">
         <img src="https://www.ikea.com/nl/nl/static/ikea-logo.f88b07ceb5a8c356b7a0fdcc9a563d63.svg" alt="logo ">
        <link rel="stylesheet" href="../assets/css/style.css">  <!-- TODO add prefetch -->
     <b>your one stop shop</b>
     </div>
         <nav>
             <a href="./index.php">
                 <div class="header_nav_button">home</div>
             </a>
             <a href="./admin/index.php">
                 <div class="header_nav_button">admin</div>
             </a>
         </nav>
     </header>