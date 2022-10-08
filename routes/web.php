<?php
    class web{
        public function executar() {
            $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
            $url = ucfirst($url);
            $url.="Controller";
            if(file_exists('Controllers/'.$url.'.php')) {
                $className = 'App\Controllers\\'.$url;
                $controller = new $url();
                $controller->index();
            }else{
                die("Nao existe esse controlador!");
            }
        }
    }
?>