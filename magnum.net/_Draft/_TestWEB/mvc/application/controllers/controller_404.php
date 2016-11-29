<?php

/*
 * Created by MagNum on 28.11.2016.
 */


class Controller_404 extends Controller
{
    function action_index()
    {
        $this->view->generate('404', 'template');
    }
}