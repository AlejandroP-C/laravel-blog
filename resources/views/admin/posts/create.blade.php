@extends('adminlte::page')

@section('title', 'Nuevo post')

@section('content_header')
    <h1>Crear nuevo post</h1>
@stop

@section('content')
    <div class="card">

        <div class="card-body">

            {!! Form::open(['route' => 'admin.posts.store']) !!}

                @include('admin.posts.partials.form')

                {!! Form::submit('Crear post', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>

    </div>
@stop

@section('js')

    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
        ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );
        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>

@endsection