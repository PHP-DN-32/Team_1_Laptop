<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Default_Models_tblProduct extends Libs_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getAllProduct() {
        return $this->model->fetchAll("SELECT * FROM sanpham");
    }

    public function getProductById($id) {
        return $this->model->fetchOne("SELECT * FROM sanpham WHERE id = $id");
    }
    
    public function getLaptopKhuyenmai(){
        return $this->model->fetchAll("SELECT * FROM sanpham ORDER BY giamgia DESC LIMIT 8");
    }
    
    public function getLaptopMoi(){
        return $this->model->fetchAll("SELECT * FROM sanpham ORDER BY ngaynhapkho DESC LIMIT 8");
    }
    
    public function getLaptopBanchay(){
//        return $this->model->fetchAll("SELECT * FROM sanpham ORDER BY giamgia DESC LIMIT 8");
    }
}

?>
