<? session_start(); 

class Page 
{ 
  // атрибуты класса Page 
  var $content;
  var $nazvanie;
  var $title = 'TLA Consulting Pty Ltd'; 
  var $keywords = 'TLA Consulting, Three Letter Abbreviation, 
                   some of my best friends are search engines'; 

  var $buttons = array( 'Форма заказа'     => 'orderform_6.php', 
                        'Услуги'  => 'register_6.php', 
                        'Регистрация' => 'orderform_6_2.php', 
                        'Карта сайта' => 'map.php4' 
                      );

  // операции класса Page 

  function SetContent($newcontent) 
  { 
    $this->content = $newcontent; 
  } 
  
  function SetTitle($newtitle) 
  { 
    $this->title = $newtitle; 
  } 
  
  function SetKeywords($newkeywords) 
  { 
    $this->keywords = $newkeywords; 
  } 

  function SetButtons($newbuttons) 
  { 
    $this->buttons = $newbuttons; 
  } 

  function Setnazvanie($newnazvanie) 
  { 
    $this->nazvanie = $newnazvanie; 
  }

  function Display() 
  { 
    echo "<html>\n<head>\n"; 
    $this -> DisplayTitle(); 
    $this -> DisplayKeywords(); 
    $this -> DisplayStyles(); 
    echo "</head>\n<body>\n"; 
    $this -> DisplayHeader(); 
    $this -> DisplayMenu($this->buttons); 
?> <table width=100% height=100% border=1><tr><td class=cont > <? echo $this->content; ?> </td></table> <?
    $this -> DisplayFooter(); 
    echo "</body>\n</html>\n"; 
  } 

  function DisplayTitle() 
  { 
   echo '<title>'. $this->title. '</title>';
  }

  function Displaynazvanie() 
  { 
   echo $this->nazvanie;
  }

  function DisplayKeywords()  
  { 
    echo '<META name=\'keywords\' content=\''. $this->keywords. '\'>'; 
  } 

  function DisplayStyles() 
  { 
?> 

<style> 
    h1 {color:white; font-size:24pt; text-align:center; font-family:arial,sans-serif} 
    .menu {color:black; font-size:12pt; text-align:center; font-family:arial,sans-serif; font-weight:bold} 
    .cont {background-color: white;  font-size:12pt; text-align:top; font-family:arial,sans-serif; font-weight:bold }
    .menu_2 {color: white}
    p {color:black; font-size:12pt; text-align:justify; font-family:arial,sans-serif} 
    p.foot {color:white; font-size:9pt; text-align:center; font-family:arial,sans-serif; font-weight:bold} 
    .header,.foot {background-color: white; font-size:12pt; text-align:center; font-family:arial,sans-serif; font-weight:bold} 
    a:link,a:visited,a:active {color:black} 
  </style> 

<?php 

  } 

  function DisplayHeader() 
  { 
?> 

<table border=1 width=100% height=20%>
<td width=100% height=20% align=center class=header> <? $this->Displaynazvanie(); ?> </td>
</table>


<table border=1 width=100%>
<td width=30% align=left valign=top>
<a href="orderform.php">  Первая лабораторная работа </a>
<br><br>
<a href="orderform_2.php">  Вторая лабораторная работа </a>
<br><br>
<a href="orderform_3.php">  Третья лабораторная работа </a>
<br><br>
<a href="orderform_4.php">  Четвертая лабораторная работа </a>
<br><br>
<a href="index_5.php">  Пятая лабораторная работа </a>
<br><br>
<a href="index_6.php">  Шестая лабораторная работа </a>
</td>
<td width=70%  align=center> 
<?php 

  } 

  function DisplayMenu($buttons) 
  { 
    echo "<table width = 100% bgcolor = 'white' border=1 cellpadding = '4' 
           cellspacing = 4>\n"; 
    echo "  <tr>\n"; 

    //вычисление размеров кнопки 
    $width = 100/count($buttons); 
    while (list($name, $url) = each($buttons)) 
    { 
      $this -> DisplayButton($width, $name, $url,!$this->IsURLCurrentPage($url)); 
    } 
    echo "  </tr>\n"; 
    echo "</table>\n"; 
  } 

  function IsURLCurrentPage($url) 
  { 
    if(strpos( $GLOBALS['SCRIPT_NAME'], $url )==false) 
    {

//echo "$GLOBALS['SCRIPT_NAME']" ;
      return false; 
    } 
    else 
    {
//print "$GLOBALS['SCRIPT_NAME']" ;
      return true; 
    } 
  } 

  function DisplayButton($width, $name, $url, $active = true) 
  { 
    if ($active) 
    { 
      echo "<td width =$width% class=menu_2>
            <a href = '$url'> 
            <img src = 's-logo.gif' alt = '$name' border = '0'></a> 
            <a href = '$url'><span class=menu>$name</span></a></td>"; 
    } 
    else 
    { 
      echo "<td width = '$width%'> 
            <img src = 'side-logo.gif'> 
            <span class=menu_2>$name</span></td>"; 
    } 
  } 

  function DisplayFooter() 
  { 
?> 
</td>
</table>

<table border=1 width=100% height=10%>
<td width=100% height=10% align=center class=foot> Кемеровский институт (филиал) РГТЭУ, Кафедра вычислительной техники и информационных технологий, 2008 </td>
</table>
</body>
</html>
<?php 

  } 
} 

?>