@extends('layouts.app')

@section('content')

    <div class="container">

        <h3>Pedidos</h3>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th width="5%">#</th>
                <th width="60%"></th>
                <th width="35%">Açao</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td></td>
                    <td>
                        <a href="" class="btn btn-default btn-sm">Editar</a>
                        <a href="{{ route('admin.categories.destroy', ['id' => $order->id]) }}" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $orders->render() }}
    </div>

@endsection