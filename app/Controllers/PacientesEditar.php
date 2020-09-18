<?php

namespace App\Controllers;

use App\Models\CadastroPacienteModel;

class PacientesEditar extends BaseController
{
    public function index()
    {
        $model = new CadastroPacienteModel();
        $data['title'] = "Editar de Pacientes";
        $data['pacientes'] = $model->getPaciente();
        return view('pages/pacienteseditar', $data);
    }

    public function editar($id = null)
    {
        $model = new CadastroPacienteModel();
        $data['pacientes'] = $model->getPaciente($id);
        $data['title'] = "Editar Paciente " .  $id;
        return view('pages/pacienteseditar', $data);
    }

    public function update($id)
    {
        helper('form');
        $model = new CadastroPacienteModel();
        $rules =
            [
                'nome'  => 'required',
                'email' => 'required',
            ];
        // $file = $this->request->getFile('foto');
        // // if ($file->getSize() > 0) {
        // //     echo 'File Name: ' . $file->getName();
        // //     echo '<br>File Random Name: ' . $file->getRandomName();
        // //     echo '<br>File Size: ' . $file->getSize();
        // //     echo '<br>File Extension: ' . $file->getExtension();
        // $file->move('assets/fotos_pacientes');
        // $name = $file->getName();
        $id = $this->request->getVar('id');
        // //echo $name . "</br>";
        // //var_dump($file);
        // // }
        if ($this->validate($rules)) {
            $data = array(
                'nome'             => $this->request->getVar('nome'),
                'cpf'              => $this->request->getVar('cpf'),
                'cartao_cns'       => $this->request->getVar('cartao_cns'),
                'email'            => $this->request->getVar('email'),
                'telefone'         => $this->request->getVar('telefone'),
                'celular'          => $this->request->getVar('celular'),
                'data_nascimento'  => $this->request->getVar('data_nascimento'),
                'nome_mae'         => $this->request->getVar('nome_mae'),
                'cep'              => $this->request->getVar('cep'),
                'endereco'         => $this->request->getVar('endereco'),
                'numero'           => $this->request->getVar('numero'),
                'bairro'           => $this->request->getVar('bairro'),
                'cidade'           => $this->request->getVar('cidade'),
                'estado'           => $this->request->getVar('estado'),
                'status'           => $this->request->getVar('status'),
                //'foto'             => $name
            );
            print_r($data);
            $data['title'] = "editar de Pacientes";
            $model->update($id, $data);
            return redirect()->to(base_url('pacientes'));
        } else {
            return view('pages/pacientes_index');
        }
    }
}
