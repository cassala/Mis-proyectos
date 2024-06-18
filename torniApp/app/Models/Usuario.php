<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * 
 * @property int $id
 * @property int $cedula
 * @property string $nombre
 * @property string $correo
 * @property string $nombreUsuario
 * @property string $contrasenia
 * @property string $rol
 * @property int $telefono
 * 
 * @property Collection|Compra[] $compras
 * @property Collection|Factura[] $facturas
 *
 * @package App\Models
 */
class Usuario extends Model
{
	protected $table = 'usuarios';
	public $timestamps = false;

	protected $casts = [
		'cedula' => 'int',
		'telefono' => 'int'
	];

	protected $fillable = [
		'nombre',
		'correo',
		'nombreUsuario',
		'contrasenia',
		'rol',
		'telefono'
	];

	public function compras()
	{
		return $this->hasMany(Compra::class, 'usuarios_id');
	}

	public function facturas()
	{
		return $this->hasMany(Factura::class, 'usuarios_id');
	}
}
