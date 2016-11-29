<?php

/*
 * Created by MagNum on 27.11.2016.
 */

class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
    }
}