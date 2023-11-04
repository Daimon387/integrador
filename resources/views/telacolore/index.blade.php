@extends('layouts.app')

@section('template_title')
    Telacolore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Telacolore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('telacolores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Cinta Id</th>
										<th>Tela Id</th>
										<th>Fecha Llegada</th>
										<th>Detalle</th>
										<th>Nro Rollo</th>
										<th>Numero</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($telacolores as $telacolore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $telacolore->nombre }}</td>
											<td>{{ $telacolore->cinta_id }}</td>
											<td>{{ $telacolore->tela_id }}</td>
											<td>{{ $telacolore->fecha_llegada }}</td>
											<td>{{ $telacolore->detalle }}</td>
											<td>{{ $telacolore->nro_rollo }}</td>
											<td>{{ $telacolore->numero }}</td>

                                            <td>
                                                <form action="{{ route('telacolores.destroy',$telacolore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('telacolores.show',$telacolore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('telacolores.edit',$telacolore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $telacolores->links() !!}
            </div>
        </div>
    </div>
@endsection
