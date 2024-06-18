<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 * 
 * @property int $id
 * @property Carbon $fecha
 * @property int $costoTotal
 * @property int|null $clientes_id
 * @property string $pdfFactura
 * @property int $totalIva
 * @property int $usuarios_id
 * 
 * @property Cliente|null $cliente
 * @property Usuario $usuario
 * @property Collection|Detallefactura[] $detallefacturas
 *
 * @package App\Models
 */
class Factura extends Model
{
	protected $table = 'facturas';
	public $timestamps = false;

	protected $casts = [
		'fecha' => 'datetime',
		'costoTotal' => 'int',
		'clientes_id' => 'int',
		'totalIva' => 'int',
		'usuarios_id' => 'int'
	];

	protected $fillable = [
		'fecha',
		'costoTotal',
		'clientes_id',
		'pdfFactura',
		'totalIva',
		'usuarios_id'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'clientes_id');
	}

	public function usuario()
	{
		return $this->belongsTo(Usuario::class, 'usuarios_id');
	}

	public function detallefacturas()
	{
		return $this->hasMany(Detallefactura::class, 'facturas_id');
	}
}
