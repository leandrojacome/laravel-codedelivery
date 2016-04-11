@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Editar cliente: {{ $client->user->name }}</h3>

    @include('errors._ckeck')

    {!! Form::model($client, ['route' => ['admin.clients.update', $client->id], 'method' => 'put']) !!}

    @include('admin.clients._form')

    <div class="form-group">
        {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}
    </div>
    {!! Form::close() !!}

</div>

@endsection