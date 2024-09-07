<?php
namespace Resources\Views;

use App\Models\HomeModel;

class AdminView
{
    // private $fileName;
    private $header;
    private $footer;

    const titulo = 'Space Agency';

    public function __construct($header = 'headerAdmin', $footer = 'footerAdmin')
    {
        // $this->fileName = $fileName;
        $this->header = $header;
        $this->footer = $footer;
    }

    public function render($fileName, $arr = [])
    {
        $user = null;
        if (isset($_SESSION['token'])) {
            $user = HomeModel::verificaEmail($_SESSION['token']);
            if (!isset($_SESSION['time']))
                $_SESSION['time'] = time();

            if (isset($_SESSION['time']) && (time() - $_SESSION['time'] > 172800)) {
                session_unset();
                session_destroy();

                $_SESSION['time'] = time();
            }
        }

        include('layouts/' . $this->header . '.php');
        include('pages/' . $fileName . '.php');
        include('layouts/' . $this->footer . '.php');
    }
}

?>