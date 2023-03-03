@extends('adminlte::page')

@section('title', 'Lista de posts')

@section('content_header')

    <a style="float: right" href="{{ route('admin.posts.create') }}"><x-eos-add-circle-o style="color: #198754; width: 32px;" /></a>

    <h1>Lista de posts</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    @livewire('admin.posts-index')

@stop