<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Telacolore
 *
 * @property $id
 * @property $nombre
 * @property $detalle
 * @property $nro_rollo
 * @property $numero
 * @property $cinta
 * @property $producto
 * @property $fecha_llegada
 * @property $created_at
 * @property $updated_at
 *
 * @property Cinta $cinta
 * @property Inventario[] $inventarios
 * @property Tela $tela
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Telacolore extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'cinta' => 'required',
		'producto' => 'required',
		'fecha_llegada' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','detalle','nro_rollo','numero','cinta','producto','fecha_llegada'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cinta()
    {
        return $this->hasOne('App\Models\Cinta', 'id', 'cinta');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventarios()
    {
        return $this->hasMany('App\Models\Inventario', 'producto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tela()
    {
        return $this->hasOne('App\Models\Tela', 'id', 'producto');
    }
    

}
