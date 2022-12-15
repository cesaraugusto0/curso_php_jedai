<?php

namespace App\Controllers;

class Clientes extends BaseController
{
    public function __construct()
    {
        // parent::__construct();
        $this->load->model('ClientesModel');
    }

    public function index()
    {
        $data['clientes'] = $this->ClientesModel->listarClientes();
        $this->load->view('clientes');
    }
}

?>