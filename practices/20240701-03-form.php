<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form name="form1" action="./20240701-04-form-post.php" method="post" enctype="application/x-www-form-urlencoded">
    <input type="text" name="account" id="account"><br>
    <input type="password" name="password" id="password"><br>
    <input type="submit"></form>

    <?php
    $account = !empty( $_POST["account"] ) ? $_POST["account"] :"user";
    $password = !empty( $_POST["password"] ) ? $_POST["password"] :"********";
    echo "account:".$account."<br>"."password:".$password;
    ?>
  <br><br>
  <form name="form2" action="./20240701-03-form.php" method="post" enctype="multipart/form-data">
    <input type="text" name="account2" id="account2"><br>
    <input type="password" name="password2" id="password2"><br>
    <input type="submit"></form>
  <?php print_r( $_POST ); ?>
</body>
</html>