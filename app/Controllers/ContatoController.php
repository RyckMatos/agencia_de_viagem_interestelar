<?php
	namespace App\Controllers;

	class ContatoController extends Controller
	{
		public function __construct(){
			$this->view = new \Resources\Views\MainView();
		}

        public function executar($arg) {
            self::$arg();
        }

        public function index() {
            $this->view->render('contato_suporte', array('link_css_base' => 'styleLogin.css', 'link_css' => 'suporte.css'));
        }

		// public function executar(){
		// 	if(isset($_POST['acao'])){
		// 		\Models\ContatoModel::enviarFormulario();
		// 		echo '<script>location.href="'.INCLUDE_PATH.'contato/sucesso"</script>';
		// 		die();
		// 	}

		// 	\Router::rota('contato/sucesso',function(){
		// 		$this->view = new \Views\MainView('contato-sucesso');
		// 		$this->view->render(array('titulo'=>'Contato'));
		// 	});

		// 	\Router::rota('contato',function(){
		// 		$this->view = new \Views\MainView('contato');
		// 		$this->view->render(array('titulo'=>'Contato'));
		// 	});
		// }
	}

?>