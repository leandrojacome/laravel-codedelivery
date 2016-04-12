@extends('layouts.app')

@section('content')

    <div class="container">

        <h3>Pedido nº #{{ $order->id }}, Valor: R$ {{ $order->total }}</h3>
        <h4><b>Cliente:</b> {{ $order->client->user->name }}</h4>
        <h5>
            <p>
                <b>Entregar em:</b><br>
                {{ $order->client->address }}<br>
                {{ $order->client->city }} - {{ $order->client->state }} - {{ $order->client->zipcode }}<br>
                <b>Telefone:</b> {{ $order->client->phone }}
            </p>
        </h5>
        {!! Form::model($order, ['route' => ['admin.orders.update', $order->id], 'method' => 'put']) !!}
        <div class="form-group">
            {{ Form::label('status', 'Status', array('class' => 'control-label')) }}
            {{ Form::select('status', $list_status, null , array( 'class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('user_deliveryman_id', 'Entregador', array('class' => 'control-label')) }}
            {{ Form::select('user_deliveryman_id', $deliveryman, null , array( 'class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Salvar', array('class' => 'btn btn-primary')) }}
        </div>
        {!! Form::close() !!}
    </div>

@endsection