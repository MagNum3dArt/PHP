<?php

/*
 * Created by MagNum on 28.11.2016.
 */


class Controller_Angular extends Controller
{
    function action_aTodo(){
        $this->view->generate('aTodo', 'template');
    }
    function action_aBasic(){
        $this->view->generate('aBasic', 'template');
    }
}