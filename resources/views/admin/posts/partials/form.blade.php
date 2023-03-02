<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}

    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, [
        'class' => 'form-control',
        'placeholder' => 'Ingrese el slug del post',
        'readonly',
    ]) !!}

    @error('slug')
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoría') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>
    @foreach ($tags as $tag)
        <label class="mr-3">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->name}}
        </label>
    @endforeach
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado
        <label>
            {!! Form::radio('status', 1, true) !!}Borrador
        </label>
        <label>
            {!! Form::radio('status', 2) !!}Publicado
        </label>
    </p>
</div>

<div class="form-group">
    {!! Form::label('extract', 'Extracto') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Cuerpo del post') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>