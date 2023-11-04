@extends('layouts.app')

@section('template_title')
    Transaccione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Transaccione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('transacciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Sucursal Bodega</th>
										<th>Empleado Id</th>
										<th>Cliente Id</th>
										<th>Fecha</th>
										<th>Total Venta</th>
										<th>Productos Retirados</th>
										<th>Detalle</th>
										<th>Fecha Vencimiento</th>
										<th>Descuento</th>
										<th>Costo Adicional</th>
										<th>Monto Deuda</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transacciones as $transaccione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $transaccione->sucursal_bodega }}</td>
											<td>{{ $transaccione->empleado_id }}</td>
											<td>{{ $transaccione->cliente_id }}</td>
											<td>{{ $transaccione->fecha }}</td>
											<td>{{ $transaccione->total_venta }}</td>
											<td>{{ $transaccione->productos_retirados }}</td>
											<td>{{ $transaccione->detalle }}</td>
											<td>{{ $transaccione->fecha_vencimiento }}</td>
											<td>{{ $transaccione->descuento }}</td>
											<td>{{ $transaccione->costo_adicional }}</td>
											<td>{{ $transaccione->monto_deuda }}</td>

                                            <td>
                                                <form action="{{ route('transacciones.destroy',$transaccione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('transacciones.show',$transaccione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('transacciones.edit',$transaccione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $transacciones->links() !!}
            </div>
        </div>
    </div>
@endsection
