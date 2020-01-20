<?php
require('header.inc');
?>

<?php
  // Создать короткие имена переменных
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>

<html>
<head>
  <title>Автозапчасти от Боба - Заказы клиентов</title>
</head>
<body>
<h1>Лабораторная работа № 2 по теме сохранение и востановление данных посредством текстовых файлов</h1>
<h2>Автозапчасти от Боба</h2>
<h3>Заказы клиентов</h3>

<?php

@  $fp = fopen("orders.txt", 'r');
   if (!$fp)
   {
     echo '<p><strong>Нет ожидающих заказов.'
         .'Пожалуйста, попытайтесь позже.</strong></p>';
     exit;
   }

   while (!feof($fp))
   {
      $order= fgets($fp, 999);
      echo $order.'<br />';
   }
   fclose($fp);

?>
</body>
</html>



<?php
require('footer.inc');
?>

