<?php
require('header.inc');
?>


<?php
  // Создать короткие имена переменных
  $tireqty = $_POST['tireqty'];
  $oilqty = $_POST['oilqty'];
  $sparkqty = $_POST['sparkqty'];
  $stefan = $_POST['stefan'];    //наш новый товар
  $fio = $_POST['fio'];
  $address = $_POST['address'];
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>

<html>
<head>
  <title>Автозапчасти от Стефана - Результаты заказа</title>
</head>
<body>
<h1>Лабораторная работа № 2 по теме сохранение и востановление данных посредством текстовых файлов</h1>
<h2>Автозапчасти от Стефана</h2>
<h3>Результаты заказа</h3>


<?php 
  $totalqty = 0;
  $totalqty += $tireqty;
  $totalqty += $oilqty;
  $totalqty += $sparkqty;
  $totalqty += $stefan;    //наш новый товар
  $totalamount = 0.00;

 

  define('TIREPRICE', 100);
  define('OILPRICE', 10);
  define('SPARKPRICE', 4);
  define('STEFANPRICE', 10);     //наш новый товар - стоимость


  $date = date('H:i, jS F');
 

  echo '<p>Заказ обработан в ';
  echo $date;
  echo '<br />';
  echo '<p>Список вашего заказа:';
  echo '<br />';


  if( $totalqty == 0 )
  {
    echo 'Вы ничего не заказали на предыдущей странице!<br />';
  }
  else
  {
    if ( $tireqty>0 )
      echo $tireqty.' автопокрышек<br />';
    if ( $oilqty>0 )
      echo $oilqty.' бутылок с маслом<br />';
    if ( $sparkqty>0 )
      echo $sparkqty.' свечей зажигания<br />';
    if ( $stefan>0 )
      echo $stefan.' карбюраторов<br />';    //наш новый товар
  }


  $total = $tireqty * TIREPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE + $stefan * STEFANPRICE; 
  $total=number_format($total, 2, '.', ' ');

 
  echo '<P>Итого по заказу: '.$total.'</p>';
  echo '<P>ФИО клиента: '.$fio.'</p>';
  echo '<P>Адрес доставки: '.$address.'<br />';

  
  $outputstring = $date."\t".$tireqty." автопокрышек \t".$oilqty." масла\t"

                  .$sparkqty." свечей\t".$stefan." карбюраторов\t\$".$total

                  ."\t Адрес доставки товара\t ". $address."\t ФИО клиента:".$fio." \n";


  // Открыть файл для добавления
  $fp = fopen("orders.txt", 'a');

  flock($fp, LOCK_EX); 
  if (!$fp)
  {
    echo '<p><strong>В настоящий момент ваш запрос не может быть обработан.  '
         .'Пожалуйста, попытайтесь позже.</strong></p></body></html>';
    exit;
  } 

  fwrite($fp, $outputstring);
  flock($fp, LOCK_UN); 
  fclose($fp);
  echo '<p>Заказ сохранен.</p>'; 
?>


<a href="vieworders_2.php"> Интерфейс персонала для просмотра файла заказов </a>


</body>
</html>


<?php
require('footer.inc');
?>
