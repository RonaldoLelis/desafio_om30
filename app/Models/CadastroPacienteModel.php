<?php

namespace App\Models;

use CodeIgniter\Model;

class CadastroPacienteModel extends Model
{
    protected $table = 'tab_pacientes';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nome',
        'cpf',
        'cartao_cns',
        'email',
        'telefone',
        'celular',
        'data_nascimento',
        'nome_mae',
        'cep',
        'endereco',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'status',
        'foto'
    ];

    public function getPaciente($id = null)
    {
        if ($id === null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => $id])->first();
    }
}
