<?php
    namespace App\Controllers;

    use App\Models\CadastroModel;

    class CadastroController extends Controller
    {
        public function __construct() {
			$this->view = new \Resources\Views\MainView();
		}

        public function executar($arg) {
            self::$arg();
        }

        public function index() {
            $this->view->render('cadastro', array('link_css_base' => 'styleCadastro.css', 'link_css' => 'cadastro.css'));
        }

        public function cadastrarUsuario() {
            if (isset($_POST['registrar'])) {
                $registro = array(
                    'nome' => $_POST['nome'],
                    'sobrenome' => $_POST['sobrenome'],
                    'email' => $_POST['email'],
                    'telefone' => $_POST['telefone'],
                    'nascimento' => $_POST['nascimento'],
                    'genero' => $_POST['genero'],
                    'endereco' => $_POST['endereco'],
                    'cidade' => $_POST['cidade'],
                    'estado' => $_POST['estado'],
                    'pais' => $_POST['pais'],
                );
        
                if ($_POST['senha'] == $_POST['senha-confirma']) {
                    $senha = md5($_POST['senha']);
                } else {
                    $msg_cadastro = 'Senhas incompatíveis';
                    $this->view->render('cadastro', array('link_css_base' => 'styleLogin.css', 'link_css' => 'cadastro.css', 'msg_cadastro' => $msg_cadastro, 'registro' => $registro));
                }
                
                $VerificarUsuario = CadastroModel::verificaEmail($registro['email']);

                if ($VerificarUsuario == null){
                    $sql = \MySql::conectar();
                    $token = md5(uniqid());
                    $_SESSION['token'] = $token;
                    $queryInsert = $sql->prepare("INSERT INTO `users` (admin, status, token, nome, sobrenome, email, telefone, data_de_nascimento, genero, endereco, cidade, estado, pais, senha) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                    $queryInsert->execute(array(1, 1, $token, $registro['nome'], $registro['sobrenome'], $registro['email'], $registro['telefone'], 
                    $registro['nascimento'], $registro['genero'], $registro['endereco'], $registro['cidade'], $registro['estado'], $registro['pais'], $senha));

                    header('Location: /agencia_de_viagem_interestelar/');
                    die();
                } else {
                    $_SESSION['msg_login'] = 'Email ja cadastrado!';

                    header('Location: /agencia_de_viagem_interestelar/login');
                    die();
                }
            }
        }
    }
?>