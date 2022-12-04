<?php
	namespace App\Controllers;

	class AdminController extends Controller
	{
		public function __construct(){
			$this->view = new \Resources\Views\AdminView();
		}
		
		public function executar($arg) {
            self::$arg();
        }

		public function index() {
            $this->view->render('admin', array('link_css_base' => 'styleHeaderAdmin.css', 'link_css' => 'admin.css'));
        }
	}

?>