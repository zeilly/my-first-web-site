<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Javascript</h1>
    <ul>
    <script>
      list = new Array("최여름","최가을","최겨울","최봄");
      i = 0;
      while(i < list.length){
        document.write("<li>"+ list[i] + "</li>");
        i = i + 1 ;
      }

    </script>
    </ul>

    <h1>php</h1>
    <ul>
    <?php
      $list = array("최여름","최가을","최겨울","최봄");
      $i = 0;
      while($i < count($list)){
        echo "<li>".$list[$i]."</li>";
        $i = $i + 1;
      }
    ?>
    </ul>
  </body>
</html>
