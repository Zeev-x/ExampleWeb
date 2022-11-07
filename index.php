<!DOCTYPE HTML>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="lynch.co.id">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header><br>
         <hr>
         <h1 class="title">W E L C O M E</h1>
         <hr>
      <nav id="navigation">
        <ul>
          <li><a href="index.php?page=home">HOME</a></li>
          <li><a href="index.php?page=about">ABOUT</a></li>
        </ul>
      </nav>
    </header>
    <marquee behavior="slide" scrollamount="40" direction="down">
    <div id="contents">
      <?php
      if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch($page){
          case 'home':
            include "home.php";
            break;
          case 'about':
            include "about.php";
            break;
        }
      }
      else {
        include "home.php";
      }
      ?>
    </div>
    </marquee>
  </body>
  <footer><br><br>
    © Copyright Lynch 2022
  </footer>
</html>