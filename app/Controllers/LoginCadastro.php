<?php

namespace App\Controllers;

use App\Models\LoginCadastroModel;

class LoginCadastro extends BaseController
{
    public function index()
    {
        $data['title'] = 'Página de Login';
        return view('pages/logincadastro', $data);
    }

    public function store()
    {
        helper('form');
        $model = new LoginCadastroModel();
        $rules =
            [
                'usuario'  => 'required',
                'senha' => 'required',
            ];
        if ($this->validate($rules)) {
            $model->save([
                'usuario'            => $this->request->getVar('usuario'),
                'senha'              => $this->request->getVar('senha'),
            ]);
            return redirect()->to(base_url('login'));
        } else {
            return view('login');
        }
    }
}
