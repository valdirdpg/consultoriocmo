<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 01 Oct 2018 15:29:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Convenio
 * 
 * @property int $idconvenios
 * @property string $nm_convenio
 * @property \Carbon\Carbon $dt_inicio
 * @property string $ds_regioes
 * @property \Carbon\Carbon $dt_registro
 * @property bool $ativo
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Convenio extends Eloquent
{
	protected $primaryKey = 'idconvenios';

	protected $casts = [
		'ativo' => 'bool'
	];

	protected $dates = [
		'dt_inicio',
		'dt_registro'
	];

	protected $fillable = [
		'nm_convenio',
		'dt_inicio',
		'ds_regioes',
		'dt_registro',
		'ativo'
	];
}
