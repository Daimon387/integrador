<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cargo
 *
 * @property $id
 * @property $nombre
 * @property $detalle_cargo
 * @property $cargo_superior
 * @property $created_at
 * @property $updated_at
 *
 * @property Cargo[] $cargos
 * @property Cargo $cargo
 * @property Empleado[] $empleados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cargo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'detalle_cargo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','detalle_cargo','cargo_superior'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cargos()
    {
        return $this->hasMany('App\Models\Cargo', 'cargo_superior', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cargo()
    {
        return $this->hasOne('App\Models\Cargo', 'id', 'cargo_superior');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'cargo', 'id');
    }
    

}
