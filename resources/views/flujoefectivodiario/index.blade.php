@extends('layouts.app')

@section('template_title')
    Flujoefectivodiario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Flujoefectivodiario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('flujoefectivodiarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Salida</th>
										<th>Monto</th>
										<th>Hora</th>
										<th>Detalle</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($flujoefectivodiarios as $flujoefectivodiario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $flujoefectivodiario->sucursal_bodega }}</td>
											<td>{{ $flujoefectivodiario->salida }}</td>
											<td>{{ $flujoefectivodiario->monto }}</td>
											<td>{{ $flujoefectivodiario->hora }}</td>
											<td>{{ $flujoefectivodiario->detalle }}</td>

                                            <td>
                                                <form action="{{ route('flujoefectivodiarios.destroy',$flujoefectivodiario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('flujoefectivodiarios.show',$flujoefectivodiario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('flujoefectivodiarios.edit',$flujoefectivodiario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $flujoefectivodiarios->links() !!}
            </div>
        </div>
    </div>
@endsection
