<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cinta
 *
 * @property $id
 * @property $nombre
 * @property $detalle
 * @property $fecha_creacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Telacolore[] $telacolores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cinta extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'detalle' => 'required',
		'fecha_creacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','detalle','fecha_creacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function telacolores()
    {
        return $this->hasMany('App\Models\Telacolore', 'cinta', 'id');
    }
    

}
