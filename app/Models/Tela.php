<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tela
 *
 * @property $id
 * @property $nombre
 * @property $precio_metro
 * @property $metraje
 * @property $precio_general
 * @property $detalle
 * @property $fecha_creacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Preciotelasucursal[] $preciotelasucursals
 * @property Preferencia[] $preferencias
 * @property Telacolore[] $telacolores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tela extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'precio_metro' => 'required',
		'precio_general' => 'required',
		'detalle' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','precio_metro','metraje','precio_general','detalle','fecha_creacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function preciotelasucursals()
    {
        return $this->hasMany('App\Models\Preciotelasucursal', 'tela_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function preferencias()
    {
        return $this->hasMany('App\Models\Preferencia', 'tela_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function telacolores()
    {
        return $this->hasMany('App\Models\Telacolore', 'tela_id', 'id');
    }
    

}
