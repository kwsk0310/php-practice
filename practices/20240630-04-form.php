<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post" onsubmit="event.preventDefault()">
    <input type="text" name="account" id="account" pattern="\w{4,}"><br>
    <input type="password" name="password" id="password" pattern="\d{6,}"><br>
    <input type="submit"></form>

    <script>
      const mySubmit = e => {
        e.preventDefault();
        document.forms[0];
        document.forms.account;
        document.forms.password;
      }
    </script>

    <?php
    $account = isset( $_POST["account"] ) ? $_POST["account"] :"user";
    $password = isset( $_POST["password"] ) ? $_POST["password"] :"********";
    echo "account:".$account."<br>"."password:".$password;
    ?>
</body>
</html>