<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 01 Oct 2018 15:29:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Paciente
 * 
 * @property int $idpacientes
 * @property string $nm_paciente
 * @property \Carbon\Carbon $dt_Nascimento
 * @property string $sexo
 * @property string $cpf
 * @property string $rg
 * @property string $profissao
 * @property string $nm_pai
 * @property string $nm_mae
 * @property string $nr_carteira
 * @property string $end_rua
 * @property string $end_bairro
 * @property string $end_cidade
 * @property int $end_cep
 * @property string $end_uf
 * @property string $nr_telefone
 * @property string $nr_celular
 * @property string $ct_email
 * @property string $senha
 * @property string $usuario
 * @property int $cd_convenio
 * @property int $cd_laudo
 * @property int $idade
 * @property int $cd_prontuario
 * @property \Carbon\Carbon $dt_registro
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Paciente extends Eloquent
{
	protected $primaryKey = 'idpacientes';

	protected $casts = [
		'end_cep' => 'int',
		'cd_convenio' => 'int',
		'cd_laudo' => 'int',
		'idade' => 'int',
		'cd_prontuario' => 'int'
	];

	protected $dates = [
		'dt_Nascimento',
		'dt_registro'
	];

	protected $fillable = [
		'nm_paciente',
		'dt_Nascimento',
		'sexo',
		'cpf',
		'rg',
		'profissao',
		'nm_pai',
		'nm_mae',
		'nr_carteira',
		'end_rua',
		'end_bairro',
		'end_cidade',
		'end_cep',
		'end_uf',
		'nr_telefone',
		'nr_celular',
		'ct_email',
		'senha',
		'usuario',
		'cd_convenio',
		'cd_laudo',
		'idade',
		'cd_prontuario',
		'dt_registro'
	];
}
