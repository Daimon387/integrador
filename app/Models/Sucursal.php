<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sucursal
 *
 * @property $id
 * @property $direccion
 * @property $ciudad
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Asistenciadiaria[] $asistenciadiarias
 * @property Detallesucursal[] $detallesucursals
 * @property Detalletransferencia[] $detalletransferencias
 * @property Flujoefectivodiario[] $flujoefectivodiarios
 * @property Inventario $inventario
 * @property Pago[] $pagos
 * @property Preciotelasucursal[] $preciotelasucursals
 * @property Transaccione[] $transacciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sucursal extends Model
{
    
    static $rules = [
		'direccion' => 'required',
		'ciudad' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['direccion','ciudad','tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistenciadiarias()
    {
        return $this->hasMany('App\Models\Asistenciadiaria', 'sucursal_bodega', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detallesucursals()
    {
        return $this->hasMany('App\Models\Detallesucursal', 'sucursal_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalletransferencias()
    {
        return $this->hasMany('App\Models\Detalletransferencia', 'sucursal_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function flujoefectivodiarios()
    {
        return $this->hasMany('App\Models\Flujoefectivodiario', 'sucursal_bodega', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function inventario()
    {
        return $this->hasOne('App\Models\Inventario', 'sucursal_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Models\Pago', 'sucursal_bodega', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function preciotelasucursals()
    {
        return $this->hasMany('App\Models\Preciotelasucursal', 'sucursal_bodega', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transacciones()
    {
        return $this->hasMany('App\Models\Transaccione', 'sucursal_bodega', 'id');
    }
    

}
