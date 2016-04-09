@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Novo cliente</h3>

    @include('errors._ckeck')

    {!! Form::open(['route' => 'admin.clients.store']) !!}

    @include('admin.clients._form')

    <div class="form-group">
        {{ Form::submit('Criar', array('class' => 'btn btn-primary')) }}
    </div>
    {!! Form::close() !!}

</div>

@endsection