@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Editar categoria: {{ $category->name }}</h3>

    @include('errors._ckeck')

    {!! Form::model($category, ['route' => ['admin.categories.update', $category->id], 'method' => 'put']) !!}

    @include('admin.categories._form')

    <div class="form-group">
        {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}
    </div>
    {!! Form::close() !!}

</div>

@endsection