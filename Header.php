<?php

class Header
{
    private static $items = array (
        1 => "Start",
        2 => "About",
        3 => "Top list"
    );

    public static function renderHeader($selectedItem)
    {
        $header = '<div class="header">'.self::renderLogo().self::renderMenu($selectedItem).'</div>';

        return $header;
    }

    public static function renderLogo()
    {
        return '<div class="title"><h1><a href="index.php">Pokemon Go</a></h1></div>';
    }

    public static function renderMenu($selectedItem)
    {
        $menu = '<div class="menu"><ul>';

        foreach(self::$items as $key => $value)
        {
            if ($key == $selectedItem)
                $menu = $menu.'<li><a class="menu_selected-button"'."href=index.php?page=$key>$value</a></li>";
            else
                $menu = $menu.'<li><a class="menu_button"'."href=index.php?page=$key>$value</a></li>";
        }

        $menu = $menu.'</ul></div>';

        return $menu;
    }
}