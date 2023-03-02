@extends('adminlte::page')

@section('title', 'Lista de categorías')

@section('content_header')
    <h1>Lista de categorías</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
            <a href="{{route('admin.categories.create')}}"><x-eos-add-circle-o style="color: #198754; width: 32px;" /></a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td width="25px"><a href="{{route('admin.categories.edit', $category)}}"><x-feathericon-edit style="color: orange" /></td>
                            <td width="25px">
                                <form action="{{route('admin.categories.destroy', $category)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" style="
                                        background-color: transparent;
                                        border-width: 0;
                                        font-family: inherit;
                                        font-size: inherit;
                                        font-style: inherit;
                                        font-weight: inherit;
                                        line-height: inherit;
                                        padding: 0;">
                                        <x-eos-delete style="width: 24px; color: red" ></x-eos-delete>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop