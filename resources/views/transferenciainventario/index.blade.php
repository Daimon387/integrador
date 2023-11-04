@extends('layouts.app')

@section('template_title')
    Transferenciainventario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Transferenciainventario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('transferenciainventarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Fecha Transaccion</th>
										<th>Cantidad Transferida</th>
										<th>Sucursal Bodega Origen</th>
										<th>Inventario</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transferenciainventarios as $transferenciainventario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $transferenciainventario->fecha_transaccion }}</td>
											<td>{{ $transferenciainventario->cantidad_transferida }}</td>
											<td>{{ $transferenciainventario->sucursal_bodega_origen }}</td>
											<td>{{ $transferenciainventario->inventario }}</td>
											<td>{{ $transferenciainventario->estado }}</td>

                                            <td>
                                                <form action="{{ route('transferenciainventarios.destroy',$transferenciainventario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('transferenciainventarios.show',$transferenciainventario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('transferenciainventarios.edit',$transferenciainventario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $transferenciainventarios->links() !!}
            </div>
        </div>
    </div>
@endsection
