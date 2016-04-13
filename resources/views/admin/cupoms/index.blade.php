@extends('layouts.app')

@section('content')

    <div class="container">

        <h3>Cupoms</h3>

        <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Nova cupom</a>
        <br>
        <br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Código</th>
                <th>Valor</th>
                <th>Açao</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cupoms as $cupom)
                <tr>
                    <td>#{{ $cupom->id }}</td>
                    <td>{{ $cupom->code }}</td>
                    <td>{{ $cupom->value }}</td>
                    <td>
                        <a href="" class="btn btn-default btn-sm">Editar</a>
                        <a href="" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $cupoms->render() }}
    </div>

@endsection