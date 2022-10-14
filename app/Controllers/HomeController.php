<?php
    namespace App\Controllers;

    use App\Models\HomeModel;

    class HomeController extends Controller
    {
        public function __construct()
        {
            $this->view = new \Resources\Views\MainView();
        }

        public function executar($arg) {
            self::$arg();
        }

        public function index()
        {
            $user = 'guest';
            if(isset($_SESSION['token']))
                $user = HomeModel::verificaEmail($_SESSION['token']);
            $this->view->render('home', array('link_css_base' => 'style.css', 'link_css' => 'home.css', 'user' => $user));
        }
    }
    
?>