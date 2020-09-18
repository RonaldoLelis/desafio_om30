<?php

namespace App\Controllers;

use App\Models\CadastroPacienteModel;

class PacientesVisualizar extends BaseController
{
    public function index()
    {
        $model = new CadastroPacienteModel();
        $data['title'] = "Página de Pacientes";
        $data['pacientes'] = $model->getPaciente();
        return view('pages/pacientes_index', $data);
    }

    public function visualizar($id)
    {
        $model = new CadastroPacienteModel();
        $data['pacientes'] = $model->getPaciente($id);
        $data['title'] = "Dados do Paciente " .  $id;
        return view('pages/pacientesvisualizar', $data);
    }
}
