<?php
require('header.inc');
?>

<html>
<head>
  <title>Автозапчасти от Стефана</title>
</head>
<body>

<h1>Лабораторная работа № 3 по теме сохранение и востановление данных посредством СУРБД - MySQL</h1>
<h2>Автозапчасти от Стефана</h2>
<h3>Форма заказа</h3>



<form action="processorder_3.php" method=post>
<table border=0>
<tr bgcolor=#cccccc>
  <td width=150>Товар</td>
  <td width=15>Количество</td>
</tr>
<tr>
  <td>Автопокрышки</td>
  <td align="left"><input type="text" name="tireqty" size= "3" maxlength="3"></td>
</tr>
<tr>
  <td>Машинное масло</td>
  <td align= "left"><input type="text" name="oilqty" size="3" maxlength="3"></td>
</tr>
<tr>
  <td>Свечи зажигания</td>
  <td align="left"><input type="text" name="sparkqty" size= "3" maxlength="3"></td>
</tr>
<tr>
  <td>Карбюратор</td>
  <td align="left"><input type="text" name="stefan" size= "3" maxlength="3"></td>  
</tr>
<tr>
  <td>ФИО клиента</td>
  <td align="left"><input type="text" name="fio" size= "40" maxlength="40"></td>
</tr>
<tr>
  <td>Адрес доставки</td>
  <td align="left"><input type="text" name="address" size= "40" maxlength="40"></td>
</tr>


<tr>
  <td colspan="2" align="center"><input type="submit" value= "Отправить заказ"></td>
</tr>
</table>
</form>
</body>
</html>



<?php
require('footer.inc');
?>
