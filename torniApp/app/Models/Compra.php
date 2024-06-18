<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Compra
 * 
 * @property int $id
 * @property Carbon $fecha
 * @property int $costoTotal
 * @property int $usuarios_id
 * 
 * @property Usuario $usuario
 * @property Collection|Detallecompra[] $detallecompras
 *
 * @package App\Models
 */
class Compra extends Model
{
	protected $table = 'compras';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'costoTotal' => 'int',
		'usuarios_id' => 'int'
	];

	protected $fillable = [
		'fecha',
		'costoTotal',
		'usuarios_id'
	];

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'usuarios_id');
	}

	public function detallecompras()
	{
		return $this->hasMany(Detallecompra::class, 'compras_id');
	}
}
