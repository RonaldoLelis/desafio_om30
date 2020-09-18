<?php

namespace App\Controllers;

use App\Models\CadastroPacienteModel;

class Pacientes extends BaseController
{
    public function index()
    {
        $model = new CadastroPacienteModel();
        $data['title'] = "Página de Pacientes";
        $data['pacientes'] = $model->getPaciente();

        return view('pages/pacientes_index', $data);
    }
}
