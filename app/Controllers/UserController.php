<?php
    namespace App\Controllers;

    use App\Models\UserModel;

    class UserController extends Controller
    {
        public function __construct(){
			$this->view = new \Resources\Views\MainView();
		}

        public function executar($arg) {
            self::$arg();
        }

        public function index() {
            $this->view->render('user', array('link_css_base' => 'style.css', 'link_css' => 'user.css'));
        }

        public function atualizarUsuario() {
            // $pdo = new PDO('mysql:host=localhost;dbname=agencia_de_viagem', 'root', '');

            if(isset($_POST['registro'])) {
                $nome = $_POST['nome'];
                $senha = $_POST['senha'];
                $email = $_POST['email'];
                $updated_at = data('Y-m-d H:i:s');
            
                // $sql = $pdo->prepare("UPDATE `users` SET nome=?, senha=?, email=?, updated_at=? WHERE id=?");
            
                // if($sql->execute(array($nome, $senha, $email, $updated_at, $id))) {
                //     return $msg = 'Atualizado com sucesso!';
                // }
            }
        }

        function logout() {
            session_destroy();
            header('Location: /agencia_de_viagem_interestelar/');
            die();
        }
    }
?>