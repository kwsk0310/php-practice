<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  if(isset($_SESSION["count"])){
    $_SESSION["count"]++;
  }else{
    $_SESSION["count"] = 1;
  }
  printf($_SESSION["count"]);
  ?>
</body>
</html>