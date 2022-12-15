<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    function __construct()
    {
        $this->load->database();
    }

    public function listaClientes() {
        $db        = db_connect('custom');
        $clientesModel = model('UserModel', true, $db);
        $clientes = $this->db->get('clientes');

        return $clientes;
    }
}




?>