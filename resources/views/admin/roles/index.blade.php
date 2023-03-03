@extends('adminlte::page')

@section('title', 'Lista de roles')

@section('content_header')

    <a style="float: right" href="{{ route('admin.roles.create') }}"><x-eos-add-circle-o style="color: #198754; width: 32px;" /></a>

    <h1>Lista de roles</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    @livewire('admin.roles-index')

@stop