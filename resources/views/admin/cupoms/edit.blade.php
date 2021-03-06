@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Editar cupom: {{ $cupom->code }}</h3>

    @include('errors._ckeck')

    {!! Form::model($cupom, ['route' => ['admin.cupoms.update', $cupom->id], 'method' => 'put']) !!}

    @include('admin.cupoms._form')

    <div class="form-group">
        {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}
    </div>
    {!! Form::close() !!}

</div>

@endsection