<?php
require('header.inc');
?>

<?php
  // Создать короткие имена переменных
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
?>

<html>
<head>
  <title>Автозапчасти от Стефана - Заказы клиентов</title>
</head>
<body>

<h1>Лабораторная работа № 2 по теме сохранение и востановление данных посредством текстовых файлов</h1>
<h2>Автозапчасти от Стефана</h2>
<h3>Заказы клиентов</h3>

<?php


//подключаемся к базе данных
$hostname="localhost";
$user="root";
$password="";
$db="lab_3";


if(!$link = mysql_connect($hostname, $user, $password))
{
echo "<br> Не могу соединиться с сервером базы данных <br>";
exit();
}
echo "<br> Cоедининение с сервером базы данных прошло успешно <br>";


if (!mysql_select_db($db, $link))
{ 
echo "<br> Не могу выбрать базу данных<br>";
exit();
}
else
{
echo "<br> Выбор базы данных прошел успешно <br>";
}


$query_1="select zakaz.id, zakaz.fio, zakaz.adress, zakaz.data, tovar.id, tovar.tiregty, tovar.oilgty, tovar.sparkgty, tovar.stefan FROM zakaz, tovar where  zakaz.id=tovar.id order by zakaz.data";
$result_1=mysql_query ($query_1);
?>

<table border=1 color=black width=100% height=100%>
<tr>
<td><b>№</b></td><td><b>ФИО</b></td><td><b>Адрес</b></td><td><b>Дата заказа</b></td><td><b>покрышки</b></td><td><b>масла</b></td><td><b>свечи</b></td><td><b>карбюраторы</b></td>
<?

while ($row_1=mysql_fetch_array ($result_1)) {


$id=$row_1["id"];
$fio=$row_1["fio"];
$adress=$row_1["adress"];
$data=$row_1["data"];
$tireqty=$row_1["tiregty"];
$oilqty=$row_1["oilgty"];
$sparkqty=$row_1["sparkgty"];
$stefan=$row_1["stefan"];


?><tr>

<td> <? echo $id ?> </td><td> <? echo $fio ?> </td><td> <? echo $adress ?> </td><td> <? echo $data ?> </td><td> <? echo $tireqty ?> </td><td> <? echo $oilqty ?> </td><td> <? echo $sparkqty ?> </td><td> <? echo $stefan ?> </td>

</tr>

<?
}
?> </table> <?
?>
</body>
</html>



<?php
require('footer.inc');
?>
