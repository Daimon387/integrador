<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventario
 *
 * @property $id
 * @property $sucursal_id
 * @property $tela_id
 * @property $cantidad
 * @property $metraje
 * @property $precio_metro_diferente
 * @property $detalle
 * @property $created_at
 * @property $updated_at
 *
 * @property Detalletransaccion[] $detalletransaccions
 * @property Sucursal $sucursal
 * @property Telacolore $telacolore
 * @property Transferenciainventario[] $transferenciainventarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventario extends Model
{
    
    static $rules = [
		'sucursal_id' => 'required',
		'tela_id' => 'required',
		'cantidad' => 'required',
		'metraje' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sucursal_id','tela_id','cantidad','metraje','precio_metro_diferente','detalle'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalletransaccions()
    {
        return $this->hasMany('App\Models\Detalletransaccion', 'inventario_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursal()
    {
        return $this->hasOne('App\Models\Sucursal', 'id', 'sucursal_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function telacolore()
    {
        return $this->hasOne('App\Models\Telacolore', 'id', 'tela_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transferenciainventarios()
    {
        return $this->hasMany('App\Models\Transferenciainventario', 'inventario_id', 'id');
    }
    

}
