<?
/** ############################################## */
/** БЛОК ПЕРЕМЕННЫХ УНИКАЛЬНЫЙ ДЛЯ КАЖДОЙ СТРАНИЦЫ */
$title = "$newsTitle";
$description = "Описание главной";
/** ############################################## */

include ROOT.'/views/layouts/decree/header.php';
?>

<article id="post-<?$news[$id]?>" class="hentry hentry-wide">
    <div class="entry-container">
        <header class="entry-header">
            <h1 class="entry-title"><?$news[$newsTitle]?>></h1>
            <p class="entry-meta">
                <span class="posted-on">
                    <time class="entry-date published"><?$news[$date]?>></time>
                </span>
            </p>
        </header>
        <div class="entry-content">
            <p><?$news[$detailText]?></p>
        </div>
    </div>
</article>

<?include ROOT.'/views/layouts/decree/footer.php';?>
