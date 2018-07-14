<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Libs_Model {

    protected $model = NULL;

    function __construct() {
        $this->model = new Libs_Database();
    }

}

?>