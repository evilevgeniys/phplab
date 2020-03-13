<?php
return array
(
    '404' => 'site/404/',

    // Главная страница
    'index.php' => 'site/index/', // actionIndex в SiteController
    'page.php' => 'site/page/',
    'homework2.php' => 'site/homework2/',
    'homework3.php' => 'site/homework3/',
    'news/([a-zA-Z0-9]+)/([a-zA-Z0-9]+)' => 'site/showNews/404/', //новости
    'news/([a-zA-Z]+)' => 'site/showNews/404/',
    'news/([0-9]+)' => 'site/showNews/$1/',
    'news' => 'site/showNews/',
    '([a-zA-Z0-9]+)' => 'site/404/',
    '' => 'site/index/', // actionIndex в SiteController
);