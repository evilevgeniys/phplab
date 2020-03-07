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

    public function  actionShowNews($id)
    {
        if(is_numeric($id))
        {
            require_once(ROOT . '/views/site/news/news.php');
            return true;
        } else {
            require_once(ROOT . '/views/site/news/showNews.php');
            return true;
        }
    }
}

