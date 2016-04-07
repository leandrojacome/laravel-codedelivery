@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Editar produto: {{ $product->name }}</h3>

    @include('errors._ckeck')

    {!! Form::model($product, ['route' => ['admin.products.update', $product->id], 'method' => 'put']) !!}

    @include('admin.products._form')

    <div class="form-group">
        {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}
    </div>
    {!! Form::close() !!}

</div>

@endsection