<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaccione
 *
 * @property $id
 * @property $sucursal_bodega
 * @property $empleado_id
 * @property $cliente_id
 * @property $fecha
 * @property $total_venta
 * @property $productos_retirados
 * @property $detalle
 * @property $fecha_vencimiento
 * @property $descuento
 * @property $costo_adicional
 * @property $monto_deuda
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @property Detalletransaccion[] $detalletransaccions
 * @property Empleado $empleado
 * @property Pago[] $pagos
 * @property Pedido[] $pedidos
 * @property Sucursal $sucursal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Transaccione extends Model
{
    
    static $rules = [
		'sucursal_bodega' => 'required',
		'empleado_id' => 'required',
		'fecha' => 'required',
		'total_venta' => 'required',
		'productos_retirados' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sucursal_bodega','empleado_id','cliente_id','fecha','total_venta','productos_retirados','detalle','fecha_vencimiento','descuento','costo_adicional','monto_deuda'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalletransaccions()
    {
        return $this->hasMany('App\Models\Detalletransaccion', 'transaccion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'empleado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Models\Pago', 'transaccion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pedidos()
    {
        return $this->hasMany('App\Models\Pedido', 'transaccion_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursal()
    {
        return $this->hasOne('App\Models\Sucursal', 'id', 'sucursal_bodega');
    }
    

}
