<?php

/*
 * Created by MagNum on 27.11.2016.
 */


class View
{
    //public $template_view; // здесь можно указать общий вид по умолчанию.

    function generate($content, $template, $data = null)
    {
        /*
        if(is_array($data)) {
            // преобразуем элементы массива в переменные
            extract($data);
        }
        */

        include 'application/views/'.$template.'_view.php';
    }
}