<?php
class Admin extends Controller{
    public function __construct() {
        parent::__construct();
        session_start();
    }
    public function index()
    {
        //print_r($_SESSION);
        $data['title'] = 'panel Administrativo';
        $data['script'] = 'index.js';
        $this->views->getView('admin', 'home', $data);

    }
}

?>