<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $persona_id
 * @property $usuario_id
 * @property $cargo_id
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
		'persona_id' => 'required',
		'usuario_id' => 'required',
		'cargo_id' => 'required',
		'sueldo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['persona_id','usuario_id','cargo_id','fecha_contratacion','sueldo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistenciadiarias()
    {
        return $this->hasMany('App\Models\Asistenciadiaria', 'empleado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cargo()
    {
        return $this->hasOne('App\Models\Cargo', 'id', 'cargo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function persona()
    {
        return $this->hasOne('App\Models\Persona', 'id', 'persona_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sucursals()
    {
        return $this->hasMany('App\Models\Sucursal', 'administrador_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transacciones()
    {
        return $this->hasMany('App\Models\Transaccione', 'empleado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'usuario_id');
    }
    

}
