<!DOCTYPE html>
<html lang="en-us">
  <head>
    <title>Elijah Tucker's Blog</title>
    <link rel="stylesheet" href="css/blogCss.php">
    <?php
         $pageName = $_SERVER['PHP_SELF'];

         $indexURL = "../index.php";?>
  </head>
  <body>
    <div class="flex-container">

      <header>
        <h1>Elijah Tucker's Blog</h1>
        <h3>A blog from a young adult with Cerebral Palsy</h3>
      </header>

      <nav>
        <ul>
          <li <?php if ($pageName == "index.php") { echo "class='on'";} ?>><a href="<?php echo $indexURL;?>">Home</a></li>
        </ul>
      </nav>

    <h1>This is the begging of an content management software that will
        be the home of a blog on the life and challenges that are faced
        by a young adult with Cerebral Palsy.</h1>
    </div>
  </body>
</html>
