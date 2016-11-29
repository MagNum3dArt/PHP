<?php

/*
 * Created by MagNum on 27.11.2016.
 */


class Controller_Portfolio
{
    function __construct()
    {
        $this->model = new Model_Portfolio();
        $this->view = new View();
    }
    function action_index(){
        $data = $this->model->get_data();
        $this->view->generate('portfolio', 'template', $data);
    }
}