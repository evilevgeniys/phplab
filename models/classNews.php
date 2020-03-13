<?php
    class News{

        public $newsList;

        public function __construct()
        {
            $this -> $newsList = self::getNewsList();
        }

        public function getNewsList(): array
       {
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
        return $csv;
        }


        public function getNews(int $idNews)
        {
            $arr = [];
            foreach ($this->newsList as $value) {
                if ($value['ID'] == $idNews) {
                    $arr = $value;
                }
            }
            return $arr;
        }
    }
?>