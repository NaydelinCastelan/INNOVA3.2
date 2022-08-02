<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $folio
 * @property $cliente_id
 * @property $fecha_encargo
 * @property $fecha_entrega
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'folio' => 'required',
		'cliente_id' => 'required',
		'fecha_encargo' => 'required',
		'fecha_entrega' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['folio','cliente_id','fecha_encargo','fecha_entrega','total'];



}
