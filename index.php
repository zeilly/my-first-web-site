<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      header {
        border-bottom: 1px solid gray;
        padding: 20px;
      }
      nav {
        border-right: 1px solid gray;
        width: 200px;
        height: 600px;
        float: left;
      }
      article {
        float: left;
        padding: 20px;
      }
      nav ol {
        list-style:none;
      }
    </style>
  </head>
  <body>
    <header>
      <h1><a href="http://localhost/">JavaScript</a></h1>
    </header>
    <nav>
      <ol>
        <?php
          echo file_get_contents("list.txt");
        ?>
      </ol>
    </nav>
    <article>
      <?php
        if( empty($_GET['id'] === false )){
            echo file_get_contents($_GET['id'].".txt");
        }

      ?>
    </article>
  </body>
</html>
