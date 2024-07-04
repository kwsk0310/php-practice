<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php
  $age = !empty($_GET["age"]) ? $_GET["age"] :0;
  if ($age >= 18) :
    ?>
      <h2>歡迎光臨</h2>
      <img width="100%" src="https://i0.wp.com/saiganak.com/wp-content/uploads/2024/01/animate-hololive-setsubun-fair-and-only-shop-00.png" alt="">
    <?php
  else :
    ?>
      <h2>Oh,no!</h2>
    <?php
  endif;
  ?>

</body>
</html>