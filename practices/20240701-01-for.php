<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .color{
      width: 50px;
      height: 50px;
      border: 1 solid black;
    }
  </style>
</head>
<body>
  <table border="1">
    <?php for($i=1;$i<=9;$i++): ?>
      <tr>
        <?php for($j=1;$j<=9;$j++): ?>
          <td><?= sprintf("%dx%d=%d",$i,$j,$i*$j) ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>
  <table border="1">
    <?php for($i=0;$i<16;$i++): ?>
      <tr>
        <?php for($j=0;$j<16;$j++): ?>
          <td class="color" style="background-color: #<?= sprintf("%x0%x",$i,$j) ?>;"></td>
        <?php endfor; ?>
      </tr>
      <?php endfor; ?>
  </table>
</body>
</html>