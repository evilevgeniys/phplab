<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
$title = "Домашнее задание 2";
$description = "Описание главной";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';

//добавление текста в файл test.txt
file_put_contents('test.txt', "12345");

//создание файла test2.txt и добавление в него текста
file_put_contents('test2.txt', '12345');

//создание файла new.txt с пустым текстом
file_put_contents('new.txt', '');

//перебор массива и создания файлов
$arr = ['1.txt', '2.txt', '3.txt'];
foreach ($arr as $value){
    file_put_contents($value, '');
}

//открытие файла test.txt и запись в его конец символа "!"
$f=fopen('test.txt','a');
fwrite($f, '!');

//Проверка на наличие файла
if(file_exists('test.txt')){
    echo 'Файл существует <br />';
} else{
    echo 'Такого файла не существует <br />';
}

//задача 7. Проверка
$arr=['1.txt','2.txt','3.txt'];
foreach($arr as $a){
    if(file_exists("$a"))
    {
        echo $a . ' - существует. <br />';
    } else {
        echo $a . ' - не существует. <br />';
        }
}


?>

<?include ROOT.'/views/layouts/decree/footer.php';?>