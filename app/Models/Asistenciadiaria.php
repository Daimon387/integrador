<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asistenciadiaria
 *
 * @property $id
 * @property $sucursal_bodega
 * @property $empleado_id
 * @property $fecha_llegada
 * @property $fecha_salida
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @property Sucursal $sucursal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asistenciadiaria extends Model
{
    
    static $rules = [
		'sucursal_bodega' => 'required',
		'empleado_id' => 'required',
		'fecha_llegada' => 'required',
		'fecha_salida' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sucursal_bodega','empleado_id','fecha_llegada','fecha_salida'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'empleado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursal()
    {
        return $this->hasOne('App\Models\Sucursal', 'id', 'sucursal_bodega');
    }
    

}
