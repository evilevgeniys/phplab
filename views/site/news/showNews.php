<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
$title = "Список новостей";
$description = "Тут выводиться список новостей";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';


$file = file(ROOT. "/upload/news.csv");
$csv = array();
$keys = list($id, $sort, $newsTitle, $date, $picture, $previewText, $detailText) = explode(';', $file[0]);
for ($i = 1, $length = count($file); $i < $length; $i++) {
    $arr = explode(";", $file[$i]);
    $csv[] = [
        $id => $arr[0],
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
    if($value[$id] == $newsid){
        $news = $value;
    }
}

var_dump($news);

?>
    <div class="section-heading-wrap">
        <div class="entry-header">
            <h2 class="section-title entry-title"><?echo $title?></h2>
        </div>
    </div>
<?if(!empty($csv)):?>
    <?foreach ($csv as $value):?>
    <article id="post-<?=$csv[$id]?>" class="hentry">
        <div class="archive-post-wrap">
            <figure class="featured-image">
                <a href="/news/<?=$csv[$id]?>/">
                    <img width="480" height="480" src="<?=$csv[$picture]?>"> </a>
            </figure>
            <div class="entry-container">
                <header class="entry-header">
                    <h2 class="entry-title"><a href="/news/<?=$csv[$id]?>/"><?=$csv[$newsTitle]?></a></h2>
                    <p class="entry-meta">
                            <span class="posted-on">
                                <time class="entry-date published"><?=$csv[$date]?>></time>
                            </span>
                    </p>
                </header>
                <div class="entry-summary">
                    <p><?=$csv[$previewText]?></p>
                </div>
            </div>
        </div>
    </article>
<?endforeach;?>
<?else:?>
    <?='Нет новостей';?>
<?endif;?>




<?include ROOT.'/views/layouts/decree/footer.php';?>