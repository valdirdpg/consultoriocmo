<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 01 Oct 2018 15:29:41 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Funcionario
 * 
 * @property int $idfuncionario
 * @property string $nome
 * @property \Carbon\Carbon $dt_Nascimento
 * @property string $sexo
 * @property string $cpf
 * @property string $rg
 * @property string $função
 * @property string $ctps
 * @property string $end_rua
 * @property string $end_bairro
 * @property string $end_cidade
 * @property int $end_cep
 * @property string $end_uf
 * @property string $nr_telefone
 * @property string $nr_celular
 * @property string $ct_email
 * @property \Carbon\Carbon $admissao
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Funcionario extends Eloquent
{
	protected $primaryKey = 'idfuncionario';

	protected $casts = [
		'end_cep' => 'int'
	];

	protected $dates = [
		'dt_Nascimento',
		'admissao'
	];

	protected $fillable = [
		'nome',
		'dt_Nascimento',
		'sexo',
		'cpf',
		'rg',
		'função',
		'ctps',
		'end_rua',
		'end_bairro',
		'end_cidade',
		'end_cep',
		'end_uf',
		'nr_telefone',
		'nr_celular',
		'ct_email',
		'admissao'
	];
}
