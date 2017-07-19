@extends('layouts.app')

@section('title', 'Employees')

@section('content')

    <div class="row">
        <div class="col s8 offset-s2">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset('images/sample-1.jpg')}}">
                    <span class="card-title">{{$data->name}}</span>
                </div>
                <div class="card-content">
                    <p>
                        <i class="material-icons">email</i> {{$data->email}} <br/>
                        <i class="material-icons">phone</i> {{$data->phone}} <br/>
                        <i class="material-icons">location_on</i> {{$data->address}} <br/>
                        <i class="material-icons">grade</i> {{$data->position}} <br/>
                        <i class="material-icons">equalizer</i> {{$data->salary}}
                    </p>
                </div>
                <div class="card-action">
                    @foreach($data->skills as $row)
                        <div class="chip">{{$row->skill}}</div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="input-field col s12 center">
                <a class="waves-effect waves-teal btn-flat" href="{{url('')}}">Regresar al listado</a>
            </div>
        </div>
    </div>

@endsection