@extends('layouts.app')

@section('title', 'Employees')

@section('content')

    <h4>Empleados</h4>

    <form action="{{url('')}}" method="get" class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <input id="search" name="emailAddress" type="search" placeholder="Ingrese el email para buscar" value="{{ $emailAddress }}" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            </div>
            <div class="input-field col s2">
                <button class="btn waves-effect waves-light" type="submit">Buscar
                    <i class="material-icons right">send</i>
                </button>
            </div>
            <div class="input-field col s4">
                <a class="waves-effect waves-teal btn-flat" href="{{url('')}}">Quitar Filtro</a>
            </div>
        </div>
    </form>

    <ul class="collection">
        @forelse($data as $row)
            <li class="collection-item avatar">
                <a href="{{url('employees', $row->id)}}" class="black-text" title="Ver Detalles">
                    <i class="material-icons circle {{($row->gender == 'male') ? 'blue' : 'red accent-1'}}">perm_identity</i>
                    <span class="title">{{$row->name}}</span>
                    <p>
                        <i class="material-icons">email</i> {{$row->email}} <br>
                        <i class="material-icons">grade</i> {{$row->position}} <br>
                        <i class="material-icons">equalizer</i> {{$row->salary}}
                    </p>
                </a>
                <a href="{{url('employees', $row->id)}}" title="Ver Detalles" class="secondary-content"><i class="material-icons">open_in_new</i></a>
            </li>
        @empty
            <p>No hay datos para mostrar</p>
        @endforelse

    </ul>

@endsection