@extends('adminlte::page')

@section('title', 'Editar usuario')

@section('content_header')

    <h1>Editar usuario</h1>

@stop

@section('content')

    @if (session('info'))

        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>

    @endif

    <div class="card">

        <div class="card-body">

            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}

                @include('admin.users.partials.form')

                {!! Form::submit('Actualizar usuario', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>

    </div>

@stop
