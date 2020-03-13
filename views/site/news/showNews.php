<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
$title = "Список новостей";
$description = "Тут выводиться список новостей";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';
include ROOT.'/models/classNews.php';

$news = new News;
$newsInfo= $news -> getNewsList();
?>
    <div class="section-heading-wrap">
        <div class="entry-header">
            <h2 class="section-title entry-title"><?echo $title?></h2>
        </div>
    </div>
<?if(empty($newsInfo) == false):?>
    <?foreach ($newsInfo as $value):?>
    <article id="post-<?=$value['ID']?>" class="hentry">
        <div class="archive-post-wrap">
            <figure class="featured-image">
                <a href="<?=HOST?>/news/<?=$value['ID']?>">
                    <img width="480" height="480" src="<?=$value['PICTURE']?>"> </a>
            </figure>
            <div class="entry-container">
                <header class="entry-header">
                    <h2 class="entry-title"><a href="<?=HOST?>/news/<?=$value['ID']?>"><?=$value['TITLE']?></a></h2>
                    <p class="entry-meta">
                            <span class="posted-on">
                                <time class="entry-date published"><?=$value['DATE']?></time>
                            </span>
                    </p>
                </header>
                <div class="entry-summary">
                    <p><?=$value['PREVIEW_TEXT']?></p>
                </div>
            </div>
        </div>
    </article>
<?endforeach;?>
<?else:?>
    <?='Нет новостей';?>
<?endif;?>




<?include ROOT.'/views/layouts/decree/footer.php';?>