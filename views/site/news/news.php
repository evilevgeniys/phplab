<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
$title = "1";
$description = "Подробная информация новости";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';
include ROOT.'/models/classNews.php';
?>

<?php
//$file = file(ROOT. "/upload/news.csv");
//$csv = array();
//$keys = list($keyid, $sort, $newsTitle, $date, $picture, $previewText, $detailText) = explode(';', $file[0]);
//for ($i = 1, $length = count($file); $i < $length; $i++) {
//    $arr = explode(";", $file[$i]);
//    $csv[] = [
//        $keyid => $arr[0],
//        $sort => $arr[1],
//        $newsTitle => $arr[2],
//        $date => $arr[3],
//        $picture => $arr[4],
//        $previewText => $arr[5],
//        $detailText => $arr[6],
//    ];
//}
//
//$news = array();
//foreach ($csv as $value){
//    if($value[$keyid] == $id){
//        $news = $value;
//    }
//}
$news = new News;
$newsInfo = $news -> getNews();
?>

<article id="post-<?=$newsInfo['ID']?>" class="hentry hentry-wide">
    <div class="entry-container">
        <header class="entry-header">
            <h1 class="entry-title"><?=$newsInfo['TITLE']?></h1>
            <p class="entry-meta">
                <span class="posted-on">
                    <time class="entry-date published"><?=$newsInfo['DATE']?></time>
                </span>
            </p>
        </header>
        <div class="entry-content">
            <p><?=$newsInfo['DETAIL_TEXT']?></p>
        </div>
    </div>
</article>

<?include ROOT.'/views/layouts/decree/footer.php';?>
