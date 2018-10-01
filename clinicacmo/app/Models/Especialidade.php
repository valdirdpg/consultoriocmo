<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 01 Oct 2018 15:29:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Especialidade
 * 
 * @property int $idespecialidades
 * @property string $ds_especialidades
 * @property \Carbon\Carbon $dt_registro
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Especialidade extends Eloquent
{
	protected $primaryKey = 'idespecialidades';

	protected $dates = [
		'dt_registro'
	];

	protected $fillable = [
		'ds_especialidades',
		'dt_registro'
	];
}
