@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Novo cupom</h3>

    @include('errors._ckeck')

    {!! Form::open(['route' => 'admin.cupoms.store']) !!}

    @include('admin.cupoms._form')

    <div class="form-group">
        {{ Form::submit('Criar', array('class' => 'btn btn-primary')) }}
    </div>
    {!! Form::close() !!}

</div>

@endsection