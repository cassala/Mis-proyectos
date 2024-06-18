<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 * 
 * @property int $id
 * @property string $tipoServicio
 * @property int|null $clientes_id
 * @property Carbon $fecha
 * @property string $placa
 * @property string $marca
 * @property string $modelo
 * @property string|null $observaciones
 * 
 * @property Cliente|null $cliente
 *
 * @package App\Models
 */
class Servicio extends Model
{
	protected $table = 'servicios';
	public $timestamps = false;

	protected $casts = [
		'clientes_id' => 'int',
		'fecha' => 'datetime'
	];

	protected $fillable = [
		'tipoServicio',
		'clientes_id',
		'fecha',
		'placa',
		'marca',
		'modelo',
		'observaciones'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'clientes_id');
	}
}
