<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
$title = "Домашнее задание 3";
$description = "Описание главной";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';


//Выводим 23 сентября 2031 года, 12:58:59 в формате timestamp
echo '<h2>Задачи на даты</h2>';
echo mktime(12,58,59,9,23,2031);
?>

<br />


<?php

//Найти разницу между 1 сентября 2010 года, 7:25:59 и текущим моментом времени в секундах
echo time() - mktime(7, 25, 59 , 9, 1, 2010);

?>

<br/>

<?php
//Выведите текущую дату в формате "2025.12.31 12:59:59"

echo date("Y.m.d H:i:s", time() );
?>

<br/>

<?php
//Выведите 1-ого сентября текущего года в формате '2020.09.01'
echo date('Y.m.d', mktime(0,0,0,9,1,2020));
?>

<br/>

<?php
//Узнайте какой день недели был 1 сентября 2010 года
echo date("l", mktime(0,0,0,9,1,2010));
?>
<br/>

<?php
//Дана дата. С помощью фунций mktime и explode перевести дату в формат timestamp
$dat = "31-12-2025";
$dat1 = implode(',', explode('-', $dat));
echo mktime($dat1);
?>

<br/>

<?php
//Дана дата в формате... С помощью функции strtotime и функции date преобазовать в формат ...
$strDate = "2025-12-31";
echo date('d-m-Y', strtotime($strDate));

?>
<br/>

<?php
echo '<h2>Задачи на регулярные выражения</h2>';

echo preg_replace('/a.?b/','a!b','ahb acb aeb aeeb adcb axeb');
?>
    <br/>

<?php
echo preg_replace('/a..a/','a!!a', 'aba aca aea abba adca abea');
?>

<br/>

<?php
echo preg_replace('/ab*a/', '!', 'aa aba abba abbba abca abea');
?>

<br/>

<?php
echo preg_replace('/(ab)+/', '!', 'ab abab abab abababab abea');
?>

<br/>

<?php
echo preg_replace('/2\+3/','!','2+3 223 2223');
?>

<br/>

<?php
echo preg_replace('/2\+*3/', '!', '23 2+3 2++3 2+++3 445 677');
?>
<?include ROOT.'/views/layouts/decree/footer.php';?>