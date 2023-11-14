<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalletransferencia
 *
 * @property $id
 * @property $sucursal_id
 * @property $transferencia_id
 * @property $detalle
 * @property $created_at
 * @property $updated_at
 *
 * @property Sucursal $sucursal
 * @property Transferenciainventario $transferenciainventario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detalletransferencia extends Model
{
    
    static $rules = [
		'sucursal_id' => 'required',
		'transferencia_id' => 'required',
		'detalle' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sucursal_id','transferencia_id','detalle'];


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
    public function transferenciainventario()
    {
        return $this->hasOne('App\Models\Transferenciainventario', 'id', 'transferencia_id');
    }
    

}
