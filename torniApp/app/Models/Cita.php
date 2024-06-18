<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Citast
 * 
 * @property Carbon $fecha
 * @property Carbon|null $hora
 * @property string $servicioRequerido
 * @property int $id
 * @property string $estado
 * @property string $nombre
 * @property int $telefono
 * @property string|null $motivo
 *
 * @package App\Models
 */
class Cita extends Model
{
	protected $table = 'citast';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'hora' => 'datetime',
		'telefono' => 'int'
	];

	protected $fillable = [
		'fecha',
		'hora',
		'servicioRequerido',
		'estado',
		'nombre',
		'telefono',
		'motivo'
	];
}
