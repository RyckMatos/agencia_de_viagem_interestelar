<?php
	namespace App\Controllers;

	class CuriosidadeController extends Controller
	{
		public function __construct(){
			$this->view = new \Resources\Views\MainView();
		}
		
		public function executar($arg) {
            self::$arg();
        }

		public function index() {
            $this->view->render('curiosidade', array('link_css_base' => 'styleLogin.css', 'link_css' => 'curiosidade.css'));
        }
	}

?>