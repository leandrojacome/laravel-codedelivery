@extends('layouts.app')

@section('content')

    <div class="container">

        <h3>Pedidos</h3>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Total</th>
                <th>Data</th>
                <th>Itens</th>
                <th>Entregador</th>
                <th>Status</th>
                <th>Açao</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>#{{ $order->id }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>
                        <ul>
                        @foreach($order->items as $item)
                            <li>{{ $item->product->name }} - {{ $item->price }}</li>
                        @endforeach
                        </ul>
                    </td>
                    <td>
                        @if($order->deliveryman)
                            {{ $order->deliveryman->name }}
                        @else
                            --
                        @endif
                    </td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <a href="{{ route('admin.orders.edit', ['id' => $order->id]) }}" class="btn btn-default btn-sm">Editar</a>
                        <a href="{{ route('admin.orders.destroy', ['id' => $order->id]) }}" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $orders->render() }}
    </div>

@endsection