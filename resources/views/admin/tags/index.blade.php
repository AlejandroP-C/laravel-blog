@extends('adminlte::page')

@section('title', 'Lista de etiquetas')

@section('content_header')
    <h1>Lista de etiquetas</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        @can('admin.tags.create')
            <div class="card-header">
                <a href="{{route('admin.tags.create')}}"><x-eos-add-circle-o style="color: #198754; width: 32px;" /></a>
            </div>
        @endcan

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
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            <td width="25px">
                                @can('admin.tags.edit')
                                    <a href="{{route('admin.tags.edit', $tag)}}"><x-feathericon-edit style="color: orange" />
                                @endcan
                            </td>
                            <td width="25px">
                                @can('admin.categories.destroy')
                                    <form action="{{route('admin.tags.destroy', $tag)}}" method="post">
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
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop