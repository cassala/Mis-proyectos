<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $id
 * @property int $cedula
 * @property string $nombre
 * @property int $telefono
 * @property string $correo
 * 
 * @property Collection|Factura[] $facturas
 * @property Collection|Servicio[] $servicios
 *
 * @package App\Models
 */
class Cliente extends Model
{
	protected $table = 'clientes';
	public $timestamps = false;

	protected $casts = [
		'cedula' => 'int',
		'telefono' => 'int'
	];

	protected $fillable = [
		'nombre',
		'telefono',
		'correo'
	];

	public function facturas()
	{
		return $this->hasMany(Factura::class, 'clientes_id');
	}

	public function servicios()
	{
		return $this->hasMany(Servicio::class, 'clientes_id');
	}
}
