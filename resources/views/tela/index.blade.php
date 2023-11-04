@extends('layouts.app')

@section('template_title')
    Tela
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tela') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('telas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Precio Metro</th>
										<th>Metraje</th>
										<th>Precio General</th>
										<th>Detalle</th>
										<th>Fecha Creacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($telas as $tela)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tela->nombre }}</td>
											<td>{{ $tela->precio_metro }}</td>
											<td>{{ $tela->metraje }}</td>
											<td>{{ $tela->precio_general }}</td>
											<td>{{ $tela->detalle }}</td>
											<td>{{ $tela->fecha_creacion }}</td>

                                            <td>
                                                <form action="{{ route('telas.destroy',$tela->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('telas.show',$tela->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('telas.edit',$tela->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $telas->links() !!}
            </div>
        </div>
    </div>
@endsection
