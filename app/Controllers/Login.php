<?php

namespace App\Controllers;

use App\Models\LoginCadastroModel;

class Login extends BaseController
{

    protected $session;

    public function index()
    {
        $data['title'] = 'Página de Login';
        return view('pages/login', $data);
    }

    public function login_in($id = null)
    {
        $this->session = \Config\Services::session();
        $model = new LoginCadastroModel();
        $user['id'] = $model->getUsuario($id);

        if ($user) {
            $this->session->set('user_logged', $user);
            return redirect()->to(base_url('pacientes'));
        } else {
            return redirect()->to(base_url('login'));
        }
    }
}
