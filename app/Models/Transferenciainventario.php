<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transferenciainventario
 *
 * @property $id
 * @property $fecha_transaccion
 * @property $cantidad_transferida
 * @property $sucursal_bodega_origen
 * @property $inventario_id
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Inventario $inventario
 * @property Sucursal $sucursal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Transferenciainventario extends Model
{
    
    static $rules = [
		'fecha_transaccion' => 'required',
		'cantidad_transferida' => 'required',
		'sucursal_bodega_origen' => 'required',
		'inventario_id' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_transaccion','cantidad_transferida','sucursal_bodega_origen','inventario_id','estado'];


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
    public function sucursal()
    {
        return $this->hasOne('App\Models\Sucursal', 'id', 'sucursal_bodega_origen');
    }
    

}
