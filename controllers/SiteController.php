<?php
class SiteController
{
    public function actionIndex()
    {
        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    public function action404()
    {
        require_once(ROOT . '/views/site/404.php');
        return true;
    }

    public function actionPage()
    {
        require_once(ROOT . '/views/site/page.php');
        return true;
    }

    public function actionHomework2()
    {
        require_once(ROOT . '/views/site/homework2.php');
        return true;
    }

    public function actionHomework3()
    {
        require_once(ROOT . '/views/site/homework3.php');
        return true;
    }

    public function  actionShowNews($idNews)
    {
        if(is_numeric($idNews))
        {
            $newsObj = new News();
            $news = $newsObj->getNews($idNews);
            require_once(ROOT . '/views/site/news/news.php');
            return true;
        } else {
            $newsObj = new News();
            $showNews = $newsObj->newsList;
            require_once(ROOT . '/views/site/news/showNews.php');
            return true;
        }
    }
}

