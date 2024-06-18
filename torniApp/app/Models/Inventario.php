<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 * 
 * @property int $id
 * @property int $stock
 * @property int $productos_id
 * @property string $estado
 * 
 * @property Producto $producto
 *
 * @package App\Models
 */
class Inventario extends Model
{
	protected $table = 'inventarios';
	public $timestamps = false;

	protected $casts = [
		'stock' => 'int',
		'productos_id' => 'int'
	];

	protected $fillable = [
		'stock',
		'productos_id',
		'estado'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'productos_id');
	}
}
