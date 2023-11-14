@extends('layouts.app')

@section('template_title')
    Empleado
@endsection

@section('content')
    <!--Aqui inicia la parte que puede ser editada-->

    <div class="float-right offset-9">
        <a href="{{ route('empleados.create') }}" class="btn btn-primary btn-sm float-right col-9" data-placement="left">
            {{ __('Create New') }}
        </a>
    </div>
    <br>
    <table class="table" style="margin-left: 20px;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Persona</th>
                <th scope="col">Usuario</th>
                <th scope="col">Cargo</th>
                <th scope="col">Fecha Contratacion</th>
                <th scope="col">Sueldo</th>
                <th scope="col">Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $empleado->persona_id }}</td>
                    <td>{{ $empleado->user->email }}</td>
                    <td>{{ $empleado->cargo->nombre }}</td>
                    <td>{{ $empleado->fecha_contratacion }}</td>
                    <td>{{ $empleado->sueldo }}</td>
                    <td>
                        <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST">
                            <a class="btn btn-sm btn-primary" href="{{ route('empleados.edit', $empleado->id) }}"><i
                                    class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>
                                {{ __('Delete') }}</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection