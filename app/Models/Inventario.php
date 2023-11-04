<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 *
 * @property $id
 * @property $sucursal
 * @property $producto
 * @property $cantidad
 * @property $metraje
 * @property $precio_metro_diferente
 * @property $detalle
 * @property $created_at
 * @property $updated_at
 *
 * @property Sucursal $sucursal
 * @property Telacolore $telacolore
 * @property Transferenciainventario[] $transferenciainventarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventario extends Model
{
    
    static $rules = [
		'sucursal' => 'required',
		'producto' => 'required',
		'cantidad' => 'required',
		'metraje' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sucursal','producto','cantidad','metraje','precio_metro_diferente','detalle'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursal()
    {
        return $this->hasOne('App\Models\Sucursal', 'id', 'sucursal');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function telacolore()
    {
        return $this->hasOne('App\Models\Telacolore', 'id', 'producto');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transferenciainventarios()
    {
        return $this->hasMany('App\Models\Transferenciainventario', 'inventario', 'id');
    }
    

}
