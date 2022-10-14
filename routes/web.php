<?php
    namespace Routes;

    define('SITE', 'http://localhost/agencia_de_viagem_interestelar');
    define('SITE_IMG', 'http://localhost/agencia_de_viagem_interestelar/resources/img');
    define('SITE_CSS', 'http://localhost/agencia_de_viagem_interestelar/resources/css/');
    define('SITE_CONTROLLER', 'http://localhost/agencia_de_viagem_interestelar/app/Controllers/');
    define('SITE_MODEL', 'http://localhost/agencia_de_viagem_interestelar/app/Models/');

    use \Routes\Route;

    class web
    {
        public function executar() {
            Route::get('','HomeController@index');
            Route::get('home','HomeController@index');
            Route::get('user/logout','UserController@logout');

            Route::get('login','LoginController@index');
            Route::post('login/logar','LoginController@login');
            
            Route::get('cadastrar','CadastroController@index');
            Route::post('cadastrar/usuario','CadastroController@cadastrarUsuario');
        }
    }
?>