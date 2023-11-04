<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Metodopago
 *
 * @property $id
 * @property $nombre
 * @property $nro_cuenta
 * @property $nombre_cuenta
 * @property $created_at
 * @property $updated_at
 *
 * @property Pago[] $pagos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Metodopago extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','nro_cuenta','nombre_cuenta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Models\Pago', 'metodo_pago', 'id');
    }
    

}
