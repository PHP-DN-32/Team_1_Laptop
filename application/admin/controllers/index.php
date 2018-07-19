<?php 
	class Admin_Controllers_Index extends Libs_Controller{
		public function __construct() {
        parent::__construct();
        //Đã có thuộc tính view của cha
    }
        public function index(){
        	$objProduct = new Admin_Models_tblProduct();
            $this->view->arrUser = $objProduct->getAllUser();
        	$this->view->render('index/index');
    }
    public function login(){
        $objProduct = new Admin_Models_tblProduct();
        $this->view->render('index/login');
    }
    public function catalog()
    {
         $objProduct = new Admin_Models_tblProduct();
        $this->view->render('index/catalog');
    }
    public function comment(){
         $objProduct = new Admin_Models_tblProduct();
        $this->view->render('index/comment');
    }
    public function form(){
         $objProduct = new Admin_Models_tblProduct();
        $this->view->render('index/form');        
    }
    public function order(){
        $objProduct = new Admin_Models_tblProduct();
        $this->view->render('index/order');  
    }
    public function product(){
         $objProduct = new Admin_Models_tblProduct();
        $this->view->render('index/product');  
    }
    public function slide(){
        $objProduct = new Admin_Models_tblProduct();
        $this->view->render('index/slide');   
    }
    public function transaction(){
        $objProduct = new Admin_Models_tblProduct();
        $this->view->arrUser = $objProduct->getAllUser();
        $this->view->render('index/transaction');      
    }
    public function user(){
        $objProduct = new Admin_Models_tblProduct();

        $this->view->render('index/user');    
    }
	}
 ?>