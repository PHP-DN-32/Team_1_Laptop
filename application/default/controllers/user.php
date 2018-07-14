<?php
class Default_Controllers_User extends Libs_Controller{
    
    public function __construct() {
        parent::__construct();
        //Đã có thuộc tính view của cha
    }
    
    public function index(){
        //echo "Index action is call!";
        $this->view->render('user/index');
    }

}
?>