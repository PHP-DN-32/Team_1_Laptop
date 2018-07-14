<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Default_Models_tblCategory extends Libs_Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function getDanhMuc(){
        return $this->model->fetchAll("SELECT * FROM danhmuc");
    }
    public function getDanhMucLaptop(){
        return $this->model->fetchAll("SELECT * FROM danhmuc WHERE loai = 'Laptop'");
    }
    public function getDanhMucLaptopGaming(){
        return $this->model->fetchAll("SELECT * FROM danhmuc WHERE loai = 'Laptop Gaming'");
    }
    public function getDanhMucAppleMacbook(){
        return $this->model->fetchAll("SELECT * FROM danhmuc WHERE loai = 'Apple Macbook'");
    }
    public function getDanhMucPhuKien(){
        return $this->model->fetchAll("SELECT * FROM danhmuc WHERE loai = 'Phụ kiện'");
    }
    public function getDanhMucLinhKien(){
        return $this->model->fetchAll("SELECT * FROM danhmuc WHERE loai = 'Linh kiện'");
    }
}

?>