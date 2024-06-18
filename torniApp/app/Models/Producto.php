<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $id
 * @property string $codigo
 * @property string $nombre
 * @property int $precioCompra
 * @property int $precioVenta
 * @property string $tipoProducto
 * @property int $proveedores_id
 * @property int $iva
 * 
 * @property Proveedor $proveedor
 * @property Collection|Detallecompra[] $detallecompras
 * @property Collection|Detallefactura[] $detallefacturas
 * @property Collection|Inventario[] $inventarios
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'productos';
	public $timestamps = false;

	protected $casts = [
		'precioCompra' => 'int',
		'precioVenta' => 'int',
		'proveedores_id' => 'int',
		'iva' => 'int'
	];

	protected $fillable = [
		'nombre',
		'precioCompra',
		'precioVenta',
		'tipoProducto',
		'proveedores_id',
		'iva'
	];

	public function proveedor()
	{
		return $this->belongsTo(Proveedor::class, 'proveedores_id');
	}

	public function detallecompras()
	{
		return $this->hasMany(Detallecompra::class, 'productos_id');
	}

	public function detallefacturas()
	{
		return $this->hasMany(Detallefactura::class, 'productos_id');
	}

	public function inventarios()
	{
		return $this->hasMany(Inventario::class, 'productos_id');
	}
}
