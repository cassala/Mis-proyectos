<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detallefactura
 * 
 * @property int $id
 * @property int $cantidad
 * @property int $costoDetalle
 * @property int|null $productos_id
 * @property int $facturas_id
 * @property string|null $servicio
 * @property \Carbon\Carbon $fecha
 * 
 * @property Factura $factura
 * @property Producto|null $producto
 *
 * @package App\Models
 */
class Detallefactura extends Model
{
	protected $table = 'detallefactura';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'cantidad' => 'int',
		'costoDetalle' => 'int',
		'productos_id' => 'int',
		'facturas_id' => 'int'
	];

	protected $fillable = [
		'fecha',
		'cantidad',
		'costoDetalle',
		'productos_id',
		'facturas_id',
		'servicio'
	];

	public function factura()
	{
		return $this->belongsTo(Factura::class, 'facturas_id');
	}

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'productos_id');
	}
}
