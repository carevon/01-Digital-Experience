<?php
  print_r($_GET);
 ?>

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

<?php
  $id = 200;
  $button = 'CLIQUE AQUI AGORA';
 ?>

<a href="get.php?id=<?php echo $id; ?>"><?php echo $button?></a>
  </body>
</html>
