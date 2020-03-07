<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
$title = "$newsTitle";
$description = "Подробная информация новости";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';?>

<?php
$file = file(ROOT. "/upload/news.csv");
$csv = array();
$keys = list($keyid, $sort, $newsTitle, $date, $picture, $previewText, $detailText) = explode(';', $file[0]);
for ($i = 1, $length = count($file); $i < $length; $i++) {
    $arr = explode(";", $file[$i]);
    $csv[] = [
        $keyid => $arr[0],
        $sort => $arr[1],
        $newsTitle => $arr[2],
        $date => $arr[3],
        $picture => $arr[4],
        $previewText => $arr[5],
        $detailText => $arr[6],
    ];
}

$news = array();
foreach ($csv as $value){
    if($value[$keyid] == $id){
        $news = $value;
    }
}

?>

<article id="post-<?=$news[$keyid]?>" class="hentry hentry-wide">
    <div class="entry-container">
        <header class="entry-header">
            <h1 class="entry-title"><?=$news[$newsTitle]?></h1>
            <p class="entry-meta">
                <span class="posted-on">
                    <time class="entry-date published"><?=$news[$date]?></time>
                </span>
            </p>
        </header>
        <div class="entry-content">
            <p><?=$news[$detailText]?></p>
        </div>
    </div>
</article>

<?include ROOT.'/views/layouts/decree/footer.php';?>
