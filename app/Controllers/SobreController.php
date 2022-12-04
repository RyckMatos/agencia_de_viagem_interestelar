<?php
	namespace App\Controllers;

	class SobreController extends Controller
	{
		public function __construct(){
			$this->view = new \Resources\Views\MainView();
		}
		
		public function executar($arg) {
            self::$arg();
        }

		public function index() {
            $this->view->render('sobre_nos', array('link_css_base' => 'styleLogin.css', 'link_css' => 'sobre_nos.css'));
        }
	}

?>