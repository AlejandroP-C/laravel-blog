@extends('adminlte::page')

@section('title', 'Lista de posts')

@section('content_header')

    <a style="float: right" href="{{ route('admin.posts.create') }}"><x-eos-add-circle-o style="color: #198754; width: 32px;" /></a>

    <h1>Lista de posts</h1>
@stop

@section('content')

    @livewire('admin.posts-index')

@stop