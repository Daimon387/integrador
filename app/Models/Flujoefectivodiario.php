<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Flujoefectivodiario
 *
 * @property $id
 * @property $sucursal_bodega
 * @property $salida
 * @property $monto
 * @property $hora
 * @property $detalle
 * @property $created_at
 * @property $updated_at
 *
 * @property Sucursal $sucursal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Flujoefectivodiario extends Model
{
    
    static $rules = [
		'sucursal_bodega' => 'required',
		'salida' => 'required',
		'monto' => 'required',
		'hora' => 'required',
		'detalle' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sucursal_bodega','salida','monto','hora','detalle'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursal()
    {
        return $this->hasOne('App\Models\Sucursal', 'id', 'sucursal_bodega');
    }
    

}
