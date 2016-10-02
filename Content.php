<?php

class Content
{
    private static $pages = array(
        1 => './assets/start.html',
        2 => './assets/about.html',
        3 => './assets/top_list.html'
    );

    public static function getContent($selectedPage)
    {
        if (array_key_exists($selectedPage, self::$pages))
            return file_get_contents(self::$pages[$selectedPage]);
        else
            return file_get_contents('./assets/index.html');
    }
}