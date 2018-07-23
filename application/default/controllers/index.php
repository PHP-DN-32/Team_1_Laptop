<?php

class Default_Controllers_Index extends Libs_Controller {

    public function __construct() {
        parent::__construct();
        //Đã có thuộc tính view của cha
    }

    public function index() {
        $objProduct = new Default_Models_tblProduct();
        $this->view->arrProduct = $objProduct->getAllProduct();
        //echo "Index action is call!";
        $objCategory = new Default_Models_tblCategory();
        $this->view->arrMenuLaptop = $objCategory->getDanhMucLaptop();
        $this->view->arrMenuGaming = $objCategory->getDanhMucLaptopGaming();
        $this->view->arrMenuMacbook = $objCategory->getDanhMucAppleMacbook();
        $this->view->arrMenuPhukien = $objCategory->getDanhMucPhuKien();
        $this->view->arrMenuLinhkien = $objCategory->getDanhMucLinhKien();
        $this->view->arrLaptopKhuyenmai = $objProduct->getLaptopKhuyenmai();
        $this->view->render('index/index');
        
    }
    public function displayMenu(){
        $objCategory = new Default_Models_tblCategory();
        $this->view->arrCategory = $objCategory->getDanhMuc();
    }

    public function detail() {
        if ($_REQUEST['id']) {
            $id = $_REQUEST['id'];

            //khởi tạo đối tượng Default_Models_tblProduct
            $objProduct = new Default_Models_tblProduct();
            $this->view->itemProduct = $objProduct->getProductById($id);
            $this->view->render('index/detail');
        }
    }
    
    public function add(){
        $this->view->render('index/add');
    }
    
    public function addProcess(){
        $productId = $_POST['txtProductId'];
        
    }
}

?>
