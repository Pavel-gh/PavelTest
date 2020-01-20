<?php 
  require ('page_5.inc');

  class OrderformPage extends Page
  {
    var $row2buttons = array( 'Re-engineering' => 'reengineering.php',
                              'Standards Compliance' => 'standards.php',
                              'Buzzword Compliance' => 'buzzword.php', 
                              'Mission Statements' => 'mission.php'
                            );
    function Display()
    {
      echo "<html>\n<head>\n";
      $this -> DisplayTitle();
      $this -> DisplayKeywords();
      $this -> DisplayStyles();
      echo "</head>\n<body>\n";
      $this -> DisplayHeader();
      $this -> DisplayMenu($this->buttons);
      $this -> DisplayMenu($this->row2buttons);

?> <table width=100% height=100% border=1><tr><td class=cont > <? echo $this->content; ?> </td></table> <?

//      echo $this->content;
      $this -> DisplayFooter();
      echo "</body>\n</html>\n";
    }
  }

  $services = new OrderformPage();
  $content ='
<form action="processorder_5.php" method=post>
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
</form> ';


  $services -> SetContent($content);
$services -> SetTitle('Лабораторная работа по теме: ООП на РНР');
$services -> Setnazvanie('Лабораторные работы по курсу Разработка интернет приложений в сфере коммерциии посредством PHP и MySQL <br> Студента группы ПИс-171: Стефановского Павла Сергеевича <br> Проверил: к.т.н. доц. Назимов А.С.');
  $services -> Display();

?>
