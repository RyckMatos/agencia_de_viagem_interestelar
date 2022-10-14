<?php
	namespace App\Controllers;

	class SobreController extends Controller
	{
		public function __construct(){
			$this->view = new \Resources\Views\MainView();
		}
		
		public function executar(){
			$this->view->render('sobre', array('link_css_base' => 'style.css', 'link_css' => 'sobre.css'));
		}
	}

?>