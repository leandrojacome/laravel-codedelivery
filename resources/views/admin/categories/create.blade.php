@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Nova categoria</h3>

    @include('errors._ckeck')

    {!! Form::open(['route' => 'admin.categories.store']) !!}

    @include('admin.categories._form')

    <div class="form-group">
        {{ Form::submit('Criar', array('class' => 'btn btn-primary')) }}
    </div>
    {!! Form::close() !!}

</div>

@endsection