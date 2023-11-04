<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $id
 * @property $sucursal_bodega
 * @property $transaccion_id
 * @property $metodo_pago
 * @property $fecha
 * @property $monto_pagado
 * @property $created_at
 * @property $updated_at
 *
 * @property Metodopago $metodopago
 * @property Sucursal $sucursal
 * @property Transaccione $transaccione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'sucursal_bodega' => 'required',
		'transaccion_id' => 'required',
		'metodo_pago' => 'required',
		'fecha' => 'required',
		'monto_pagado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sucursal_bodega','transaccion_id','metodo_pago','fecha','monto_pagado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function metodopago()
    {
        return $this->hasOne('App\Models\Metodopago', 'id', 'metodo_pago');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursal()
    {
        return $this->hasOne('App\Models\Sucursal', 'id', 'sucursal_bodega');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function transaccione()
    {
        return $this->hasOne('App\Models\Transaccione', 'id', 'transaccion_id');
    }
    

}
