<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $fillable = [
        'nm_convenio', 'dt_inicio', 'ds_regioes', 'ativo',
    ];
    //protected $guarded = ['admin'];

    public $usuarios=[



    ];
}
