<?php
    namespace App\Controllers;

    use App\Models\LoginModel;

    class LoginController extends Controller
    {
        public function __construct(){
			$this->view = new \Resources\Views\MainView();
		}

        public function executar($arg) {
            self::$arg();
        }

        public function index() {
            $this->view->render('login', array('link_css_base' => 'styleLogin.css', 'link_css' => 'login.css'));
        }

        public function login() {
            if(isset($_POST['logar'])) {
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                $info = LoginModel::verificaEmail($email);

                if(!isset($_SESSION['tentativa'])) {
                    $_SESSION['tentativa'] = 1;
                    $_SESSION['startLogin'] = time();
                }

                if(isset($info) && isset($info['senha']) && md5($senha) == $info['senha'] && $_SESSION['tentativa'] < 3) {
                    $_SESSION['token'] = $info['token'];

                    header('Location: /agencia_de_viagem_interestelar/');
                    die();

                } elseif($_SESSION['tentativa'] < 3) {
                    $_SESSION['tentativa'] = 1 + $_SESSION['tentativa'];
                    $_SESSION['msg_login'] = 'Senha ou email esta incorreto, tentativa '.($_SESSION['tentativa']-1);

                    return $this->view->render('login', array('link_css_base' => 'styleLogin.css', 'link_css' => 'login.css', 'email' => $email));

                } else {
                    $_SESSION['tentativa'] = 1 + $_SESSION['tentativa'];
                    $_SESSION['msg_login'] = 'Errou 3 vezes, tente novamente mais tarde';

                    return $this->view->render('login', array('link_css_base' => 'styleLogin.css', 'link_css' => 'login.css', 'email' => $email));
                }
            }
        }
    }
?>