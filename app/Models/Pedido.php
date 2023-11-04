<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $id
 * @property $transaccion_id
 * @property $nro_factura
 * @property $lugar_destino
 * @property $detalle
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Transaccione $transaccione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{
    
    static $rules = [
		'transaccion_id' => 'required',
		'nro_factura' => 'required',
		'lugar_destino' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['transaccion_id','nro_factura','lugar_destino','detalle','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function transaccione()
    {
        return $this->hasOne('App\Models\Transaccione', 'id', 'transaccion_id');
    }
    

}
