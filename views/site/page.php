<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
$title = "Домашнее задание 1";
$description = "Описание главной";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';
?>
<div class="section-heading-wrap">
    <div class="entry-header">
        <h2 id="featured-heading" class="section-title entry-title">
            Домашнее задание №1
        </h2>
    </div>
</div>
<div id="home_post">
    <h3>Задача:</h3>
    <p><?php
        $var = 5;
        $var += 32;// $var = $var + 32
        $var -= 9; //$var = $var - 9
        $var *= 10; //$var = $var * 10
        $var /= 3; //$var = var / 3
        $var += 7; //$var = $var + 7
        $var -= 4; //$var = $var - 4
        echo $var;
    ?> </p>

    <h3>Работа с переменными:</h3>
    <p>
        <?php
        $a = 3;
        echo $a;
        ?>
    </p>

    <p>
        <?php
        $a = 4;
        $b = 9;
        $c = $a + $b;
        echo "a + b = $c <br />";
        $c = $a - $b;
        echo "a - b = $c <br />";
        $c = $a * $b;
        echo "a * b = $c <br />";
        $c = $a / $b;
        echo "a / b = $c <br />";
        ?>
    </p>

    <p>
        <?
        $c = 21;
        $d = 8;
        $result = $c + $d;
        echo "c + d = $result";
        ?>
    </p>

    <p>
        <?
        $a = 4;
        $b = 9;
        $c = 11;
        $sum = $a + $b + $c;
        echo "a + b + c = $sum";
        ?>
    </p>

    <p>
        <?
        $a = 35;
        $b = 16;
        $c = $a - $b;
        $d = 13;
        $result = $c + $d;
        echo "a - b + d = $result";
        ?>

    </p>

    <h3>Работа со строками:</h3>
    <p>
        <?
        $text = 'Привет, Мир!';
        echo $text;
        ?>
    </p>

    <p>
        <?
        $text1 = 'Привет,';
        $text2 = ' Мир!';
        echo $text1.$text2;
        ?>
    </p>

    <p>
        <?
        $name = 'Евгений';
        echo "Привет, $name";
        ?>
    </p>

    <p>
        <?
        $age = 20;
        echo "Мне $age лет!";
        ?>
    </p>

</div>
<?include ROOT.'/views/layouts/decree/footer.php';?>
