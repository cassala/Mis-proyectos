<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 * 
 * @property int $id
 * @property string $nombre
 * @property int $telefono
 * @property string $correo
 * @property string $marcaDistribuida
 * @property bool $activo
 * 
 * @property Collection|Producto[] $productos
 *
 * @package App\Models
 */
class Proveedor extends Model
{
	protected $table = 'proveedores';
	public $timestamps = false;

	protected $casts = [
		'telefono' => 'int',
		'activo' => 'bool'
	];

	protected $fillable = [
		'nombre',
		'telefono',
		'correo',
		'marcaDistribuida',
		'activo'
	];

	public function productos()
	{
		return $this->hasMany(Producto::class, 'proveedores_id');
	}
}
