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
          <li <?php if ($pageName == "/index.php") { echo "class='on'";} ?>><a href="<?php echo $indexURL;?>">Home</a></li>
        </ul>
      </nav>

    <h3>This is the begging of an content management software that will
        be the home of a blog that follows a young adult with Cerebral Palsy.</h5>
        <h4>The Content mangment software is currently being developed, so
          expect changes to the look and feel.</h6>
    <footer>
      Website is powered by Your Message by Elijah A. Tucker <br>
      Content &copy; 2017 Elijah A. Tucker
    </footer>
    </div>
  </body>
</html>
