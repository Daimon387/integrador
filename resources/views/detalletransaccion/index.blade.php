@extends('layouts.app')

@section('template_title')
    Detalletransaccion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalletransaccion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalletransaccions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Transaccion</th>
										<th>Inventario</th>
										<th>Cantidad</th>
										<th>Precio Metro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalletransaccions as $detalletransaccion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detalletransaccion->transaccion }}</td>
											<td>{{ $detalletransaccion->inventario }}</td>
											<td>{{ $detalletransaccion->cantidad }}</td>
											<td>{{ $detalletransaccion->precio_metro }}</td>

                                            <td>
                                                <form action="{{ route('detalletransaccions.destroy',$detalletransaccion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalletransaccions.show',$detalletransaccion->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalletransaccions.edit',$detalletransaccion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $detalletransaccions->links() !!}
            </div>
        </div>
    </div>
@endsection
