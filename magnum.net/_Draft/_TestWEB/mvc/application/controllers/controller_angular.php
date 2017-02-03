<?php

/*
 * Created by MagNum on 28.11.2016.
 */


class Controller_Angular extends Controller
{
    function action_aTodo(){
        $this->view->generate('angular/aTodo', 'template');
    }
    function action_aBasic(){
        $this->view->generate('angular/aBasic', 'template');
    }
}