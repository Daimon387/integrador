<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Preciotelasucursal
 *
 * @property $id
 * @property $sucursal_bodega
 * @property $tela_id
 * @property $precio_metro
 * @property $created_at
 * @property $updated_at
 *
 * @property Sucursal $sucursal
 * @property Tela $tela
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Preciotelasucursal extends Model
{
    
    static $rules = [
		'sucursal_bodega' => 'required',
		'tela_id' => 'required',
		'precio_metro' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sucursal_bodega','tela_id','precio_metro'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursal()
    {
        return $this->hasOne('App\Models\Sucursal', 'id', 'sucursal_bodega');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tela()
    {
        return $this->hasOne('App\Models\Tela', 'id', 'tela_id');
    }
    

}
