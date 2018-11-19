<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = [
        'nm_medico',
        'cpf_medico' ,
        'rg_medico' ,
        'nr_crm',
        'nm_usuario',
        'cd_especialidade',
        'ativo'
    ];

    public $usuarios=[



    ];
}
