<?php
    namespace App\Controllers;
    class HomeController extends Controller
    {
        public function __construct()
        {
            $this->view = new \Resources\Views\MainView('home');
        }

        public function index()
        {
            $this->view->render(array('nomeDaVariavel'=>''));
        }
    }
    
?>