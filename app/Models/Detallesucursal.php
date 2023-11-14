<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detallesucursal
 *
 * @property $id
 * @property $empleado_id
 * @property $sucursal_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @property Sucursal $sucursal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detallesucursal extends Model
{
    
    static $rules = [
		'empleado_id' => 'required',
		'sucursal_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['empleado_id','sucursal_id'];


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
        return $this->hasOne('App\Models\Sucursal', 'id', 'sucursal_id');
    }
    

}
