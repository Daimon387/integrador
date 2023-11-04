<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $datos
 * @property $usuario
 * @property $cargo
 * @property $fecha_contratacion
 * @property $sueldo
 * @property $created_at
 * @property $updated_at
 *
 * @property Asistenciadiaria[] $asistenciadiarias
 * @property Cargo $cargo
 * @property Persona $persona
 * @property Sucursal[] $sucursals
 * @property Transaccione[] $transacciones
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'datos' => 'required',
		'usuario' => 'required',
		'cargo' => 'required',
		'sueldo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['datos','usuario','cargo','fecha_contratacion','sueldo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistenciadiarias()
    {
        return $this->hasMany('App\Models\Asistenciadiaria', 'empleado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cargo()
    {
        return $this->hasOne('App\Models\Cargo', 'id', 'cargo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function persona()
    {
        return $this->hasOne('App\Models\Persona', 'id', 'datos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sucursals()
    {
        return $this->hasMany('App\Models\Sucursal', 'administrador', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transacciones()
    {
        return $this->hasMany('App\Models\Transaccione', 'empleado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'usuario');
    }
    

}
