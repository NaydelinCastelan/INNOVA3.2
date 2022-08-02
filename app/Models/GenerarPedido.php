<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GenerarPedido
 *
 * @property $folio
 * @property $cliente_id
 * @property $fecha_encargo
 * @property $fecha_entrega
 * @property $hora
 * @property $instalacion
 * @property $descripcion
 * @property $productos
 * @property $cantidad
 * @property $precio
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GenerarPedido extends Model
{
    
    static $rules = [
		'folio' => 'required',
		'cliente_id' => 'required',
		'fecha_encargo' => 'required',
		'fecha_entrega' => 'required',
		'hora' => 'required',
		'instalacion' => 'required',
		'productos' => 'required',
		'cantidad' => 'required',
		'precio' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['folio','cliente_id','fecha_encargo','fecha_entrega','hora','instalacion','descripcion','productos','cantidad','precio','total'];



}
