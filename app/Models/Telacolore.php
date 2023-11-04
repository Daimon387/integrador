<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Telacolore
 *
 * @property $id
 * @property $nombre
 * @property $cinta_id
 * @property $tela_id
 * @property $fecha_llegada
 * @property $detalle
 * @property $nro_rollo
 * @property $numero
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
		'cinta_id' => 'required',
		'tela_id' => 'required',
		'fecha_llegada' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','cinta_id','tela_id','fecha_llegada','detalle','nro_rollo','numero'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cinta()
    {
        return $this->hasOne('App\Models\Cinta', 'id', 'cinta_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventarios()
    {
        return $this->hasMany('App\Models\Inventario', 'tela_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tela()
    {
        return $this->hasOne('App\Models\Tela', 'id', 'tela_id');
    }
    

}
