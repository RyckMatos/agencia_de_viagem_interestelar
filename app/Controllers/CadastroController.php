<?php
    namespace App\Controllers;

    use App\Models\CadastroModel;

    class CadastroController extends Controller
    {
        public function __construct(){
			$this->view = new \Resources\Views\MainView();
		}

        public function executar($arg) {
            self::$arg();
        }

        public function index() {
            $this->view->render('cadastro', array('link_css_base' => 'styleLogin.css', 'link_css' => 'cadastro.css'));
        }

        public function cadastrarUsuario() {
            if(isset($_POST['registrar'])) {
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
                // $_SESSION['nome'] = $nome;
                // $_SESSION['sobrenome'] = $sobrenome;
                // $_SESSION['nascimento'] = $nascimento;
                // $_SESSION['telefone'] = $telefone;
                // $_SESSION['genero'] = $genero;
                // $_SESSION['email'] = $email;
                // $_SESSION['endereco'] = $endereco;
                // $_SESSION['cidade'] = $cidade;
                // $_SESSION['estado'] = $estado;
                // $_SESSION['pais'] = $pais;
        
                if($_POST['senha'] == $_POST['senha-confirma']) {
                    $senha = md5($_POST['senha']);
                } else {
                    // $_SESSION['msg_cadastro'] = 'Senhas incompatíveis';
                    $msg_cadastro = 'Senhas incompatíveis';
                    $this->view->render('cadastro', array('link_css_base' => 'styleLogin.css', 'link_css' => 'cadastro.css', 'msg_cadastro' => $msg_cadastro, 'registro' => $registro));
                    // header('Location: /agencia_de_viagem_interestelar/cadastrar');
                    // die();
                }
                $created_at = date('Y-m-d H:i:s');
                $updated_at = date('Y-m-d H:i:s');
        
                
                $VerificarUsuario = CadastroModel::verificaEmail($registro['email']);
                // var_dump($VerificarUsuario);
                // die();
                // echo '<pre>';
                // print_r(verificaEmail($email));
                // echo '</pre>';
                if($VerificarUsuario == null){
                    $sql = \MySql::conectar();
                    $token = md5(uniqid());
                    $_SESSION['token'] = $token;
                    $queryInsert = $sql->prepare("INSERT INTO `users` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                    $queryInsert->execute(array($token, $registro['nome'], $registro['sobrenome'], $registro['email'], $registro['telefone'], $registro['nascimento'], $registro['genero'], $registro['endereco'], $registro['cidade'], $registro['estado'], $registro['pais'], $senha, $created_at, $updated_at));
        
                    // $querySelector = $sql->prepare("SELECT * FROM users WHERE email=?");
                    // $querySelector->execute(array($email));
                    // $user = $queryInsert->fetchAll();
                    // $_SESSION['user'] = $info;
        
                    // $this->view->render('home', array('link_css_base' => 'style.css', 'link_css' => 'home.css', 'user' => $user));
                    header('Location: /agencia_de_viagem_interestelar/');
                    die();
                } else {
                    $_SESSION['msg_login'] = 'Email ja cadastrado!';
                    // $msg_login = 'Email ja cadastrado!';
                    // $this->view->render('login', array('link_css_base' => 'styleLogin.css', 'link_css' => 'login.css', 'msg_login' => $msg_login));
                    header('Location: /agencia_de_viagem_interestelar/login');
                    // die();
                }
            }
        }
    }
?>