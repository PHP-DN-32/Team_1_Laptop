<?php
class Admin_Models_tblProduct extends Libs_Model{
    private $user;
    public function __construct() {
        parent::__construct();
    }
    public function getAllUser(){
    	return $this->model->fetchAll("SELECT * FROM taikhoan");
    }
}
