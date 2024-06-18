<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detallecompra
 * 
 * @property int $id
 * @property int $cantidad
 * @property int $costoDetalle
 * @property int $productos_id
 * @property int $compras_id
 * 
 * @property Compra $compra
 * @property Producto $producto
 *
 * @package App\Models
 */
class Detallecompra extends Model
{
	protected $table = 'detallecompra';
	public $timestamps = false;

	protected $casts = [
		'cantidad' => 'int',
		'costoDetalle' => 'int',
		'productos_id' => 'int',
		'compras_id' => 'int'
	];

	protected $fillable = [
		'cantidad',
		'costoDetalle',
		'productos_id',
		'compras_id'
	];

	public function compra()
	{
		return $this->belongsTo(Compra::class, 'compras_id');
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'productos_id');
	}
}
