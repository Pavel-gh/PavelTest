<?php
require('header.inc');
?>

<h1>Автозапчасти от Стефана</h1>
<h2>Заказы клиентов</h2>

<?php
   //Считывание всего файла
   //Каждый заказ становится элементом массива
  $orders= file("orders_4.txt");
  
   // Подсчет количества заказов, хранящихся в массиве
  $number_of_orders = count($orders);

echo "$number_of_orders";

  if ($number_of_orders == 0)
  {
    echo '<p><strong>>Нет ожидающих заказов.
        Пожалуйста, попытайтесь позже.</strong></p>';
  }

  echo '<table border=1>';
  echo '<tr><th bgcolor = \"#CCCCFF\">Дата заказа</th>' .
            '<th bgcolor = \"#CCCCFF\">Автопокрышки</th>' .
            '<th bgcolor = \"#CCCCFF\">Машинное масло</th>' .
            '<th bgcolor = \"#CCCCFF\">Свечи зажигания</th>' .
			'<th bgcolor = \"#CCCCFF\">Карбюратор</th>' .
            '<th bgcolor = \"#CCCCFF\">Всего</th>' .
            '<th bgcolor = \"#CCCCFF\">Адрес клиента</th>' .
            '<th bgcolor = \"#CCCCFF\">ФИО клиента</th>' .
        '<tr>';

  for ($i=0; $i<$number_of_orders; $i++)
  {
    //разбиение строк
    $line = explode( "\t", $orders[$i] );

	//сохранение только количества заказанных товаров
    $line[1] = intval( $line[1] );
    $line[2] = intval( $line[2] );
    $line[3] = intval( $line[3] );
	$line[4] = intval( $line[4] );     //наш новый товар

      //вывод заказов и спросить почему в конце счет не ровный?
    echo "<tr><td>$line[0]</td>
                <td align='right'>$line[1]</td>
                <td align='right'>$line[2]</td>
                <td align='right'>$line[3]</td>
                <td align='right'>$line[4]</td>
                <td>$line[5]</td>
                <td>$line[7]</td>
				<td>$line[9]</td>   
            </tr>";
  }
  echo "</table>";


require('footer.inc');
?>
