@extends('adminlte::page')

@section('title', 'Editar categoría')

@section('content_header')
    <h1>Editar categoría</h1>
@stop

@section('content')

    {{-- @if (session('info'))

        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
        
    @endif

    <div class="card">

        <div class="card-body">

            {!! Form::model($posts, ['route' => ['admin.posts.update', $posts], 'method' => 'put']) !!}

            @include('admin.posts.partials.form')

            {!! Form::submit('Actualizar post', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>

    </div> --}}
@stop


@section('js')

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>

@endsection