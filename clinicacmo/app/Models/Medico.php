<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 01 Oct 2018 15:29:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Medico
 * 
 * @property int $idmedicos
 * @property string $nm_medico
 * @property int $cpf_medico
 * @property int $rg_medico
 * @property int $nr_crm
 * @property string $nm_usuario
 * @property string $senha
 * @property int $num_acesso
 * @property int $laudo_idlaudo
 * @property int $cd_especialidade
 * @property \Carbon\Carbon $dt_registro
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Medico extends Eloquent
{
	protected $primaryKey = 'idmedicos';

	protected $casts = [
		'cpf_medico' => 'int',
		'rg_medico' => 'int',
		'nr_crm' => 'int',
		'num_acesso' => 'int',
		'laudo_idlaudo' => 'int',
		'cd_especialidade' => 'int'
	];

	protected $dates = [
		'dt_registro'
	];

	protected $fillable = [
		'nm_medico',
		'cpf_medico',
		'rg_medico',
		'nr_crm',
		'nm_usuario',
		'senha',
		'num_acesso',
		'laudo_idlaudo',
		'cd_especialidade',
		'dt_registro'
	];
}
