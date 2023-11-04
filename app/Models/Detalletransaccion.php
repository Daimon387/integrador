<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalletransaccion
 *
 * @property $id
 * @property $transaccion_id
 * @property $inventario_id
 * @property $cantidad
 * @property $precio_metro
 * @property $created_at
 * @property $updated_at
 *
 * @property Inventario $inventario
 * @property Transaccione $transaccione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detalletransaccion extends Model
{
    
    static $rules = [
		'transaccion_id' => 'required',
		'inventario_id' => 'required',
		'cantidad' => 'required',
		'precio_metro' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['transaccion_id','inventario_id','cantidad','precio_metro'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function inventario()
    {
        return $this->hasOne('App\Models\Inventario', 'id', 'inventario_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function transaccione()
    {
        return $this->hasOne('App\Models\Transaccione', 'id', 'transaccion_id');
    }
    

}
