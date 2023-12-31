<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Preferencia
 *
 * @property $id
 * @property $cliente_id
 * @property $tela_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Tela $tela
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Preferencia extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente_id','tela_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tela()
    {
        return $this->hasOne('App\Models\Tela', 'id', 'tela_id');
    }
    

}
