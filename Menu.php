<?php

class Menu
{
    private static $items = array (
        1 => array("name" => "Start", "href" => "index.php?page=1"),
        2 => array("name" => "About", "href" => "index.php?page=2"),
        3 => array("name" => "Top list", "href" => "index.php?page=3")
    );

    public static function renderMenu($selectedItem)
    {
        $header = '<div class="header"><div class="title"><h1><a href="index.php">Pokemon Go</a></h1></div>';
        $menu = '<div class="menu"><ul>';

        foreach(self::$items as $key => $value)
        {
            if ($key == $selectedItem)
                $menu = $menu.'<li><a class="menu_selected-button"'."href=$value[href]>$value[name]</a></li>";
            else
                $menu = $menu.'<li><a class="menu_button"'."href=$value[href]>$value[name]</a></li>";
        }

        $menu = $menu.'</ul></div>';
        $header = $header.$menu.'</div>';

        return $header;
    }
}