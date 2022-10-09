<?php
    namespace Resources\Views;
    class MainView
    {
        private $fileName;
        private $style;
        private $style2;
        private $header;
        private $footer;

        public function __construct($fileName, $style = 'style', $style2 = '', $header = 'header', $footer = 'footer')
        {
            $this->fileName = $fileName;
            $this->style = $style;
            $this->style2 = $style2;
            $this->header = $header;
            $this->footer = $footer;
        }

        public function render($arr = [])
        {
            include('pages/'.$this->fileName.'.php');
            include('./css/'.$this->style.'.css');
            include('./css/'.$this->style2.'.css');
            include('layouts/'.$this->header.'.php');
            include('layouts/'.$this->footer.'.php');
        }
    }
    
?>