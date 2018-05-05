<?php 
      $x = $_GET['x']; 
      $var1 = 1;
      $var2 = 1;
      $result_str = 'Задуманное число НЕ входит в числовой ряд';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Ряд Фибоначчи</h1>
  <p>Пользователь задумал: <?php  echo $x ?></p>
  <?php 
      while ($var1 <= $x) {
          if ($var1 == $x) {
              $result_str = 'Задуманное число входит в числовой ряд';
          break;
          }

      $var3 = $var1;
      $var1 = $var1 + $var2;
      $var2 = $var3;
      }
  ?>
  <p><?php echo $result_str ?></p>
  
</body>
</html>