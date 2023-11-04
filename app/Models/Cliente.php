<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $datos_personales
 * @property $fecha_inicio_compra
 * @property $giro_dinero
 * @property $deuda
 * @property $created_at
 * @property $updated_at
 *
 * @property Persona $persona
 * @property Preferencia[] $preferencias
 * @property Transaccione[] $transacciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'datos_personales' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['datos_personales','fecha_inicio_compra','giro_dinero','deuda'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function persona()
    {
        return $this->hasOne('App\Models\Persona', 'id', 'datos_personales');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function preferencias()
    {
        return $this->hasMany('App\Models\Preferencia', 'cliente', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transacciones()
    {
        return $this->hasMany('App\Models\Transaccione', 'cliente', 'id');
    }
    

}
