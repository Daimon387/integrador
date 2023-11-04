@extends('layouts.app')

@section('template_title')
    Asistenciadiaria
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Asistenciadiaria') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('asistenciadiarias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Empleado</th>
										<th>Fecha Llegada</th>
										<th>Fecha Salida</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asistenciadiarias as $asistenciadiaria)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $asistenciadiaria->sucursal_bodega }}</td>
											<td>{{ $asistenciadiaria->empleado }}</td>
											<td>{{ $asistenciadiaria->fecha_llegada }}</td>
											<td>{{ $asistenciadiaria->fecha_salida }}</td>

                                            <td>
                                                <form action="{{ route('asistenciadiarias.destroy',$asistenciadiaria->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('asistenciadiarias.show',$asistenciadiaria->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('asistenciadiarias.edit',$asistenciadiaria->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $asistenciadiarias->links() !!}
            </div>
        </div>
    </div>
@endsection
