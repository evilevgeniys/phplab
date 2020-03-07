<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
$title = "Список новостей";
$description = "Тут выводиться список новостей";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';


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

?>
    <div class="section-heading-wrap">
        <div class="entry-header">
            <h2 class="section-title entry-title"><?echo $title?></h2>
        </div>
    </div>
<?if(empty($csv) == false):?>
    <?foreach ($csv as $value):?>
    <article id="post-<?=$value[$keyid]?>" class="hentry">
        <div class="archive-post-wrap">
            <figure class="featured-image">
                <a href="<?=HOST?>/news/<?=$value[$keyid]?>">
                    <img width="480" height="480" src="<?=$value[$picture]?>"> </a>
            </figure>
            <div class="entry-container">
                <header class="entry-header">
                    <h2 class="entry-title"><a href="<?=HOST?>/news/<?=$value[$keyid]?>"><?=$value[$newsTitle]?></a></h2>
                    <p class="entry-meta">
                            <span class="posted-on">
                                <time class="entry-date published"><?=$value[$date]?></time>
                            </span>
                    </p>
                </header>
                <div class="entry-summary">
                    <p><?=$value[$previewText]?></p>
                </div>
            </div>
        </div>
    </article>
<?endforeach;?>
<?else:?>
    <?='Нет новостей';?>
<?endif;?>




<?include ROOT.'/views/layouts/decree/footer.php';?>