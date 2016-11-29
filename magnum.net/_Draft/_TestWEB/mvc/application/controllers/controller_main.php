<?php

/*
 * Created by MagNum on 27.11.2016.
 */


class Controller_Main extends Controller
{
    
    function action_index()
    {
        $this->view->generate('main', 'template');
    } 
}