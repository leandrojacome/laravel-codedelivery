@extends('layouts.app')

@section('content')

    <div class="container">

        <h3>Clientes</h3>

        <a href="{{ route('admin.clients.create') }}" class="btn btn-success">Novo cliente</a>
        <br>
        <br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th width="5%">#</th>
                <th width="20%">Nome</th>
                <th width="15%">E-mail</th>
                <th width="10%">Telefone</th>
                <th width="10%">Cidade</th>
                <th width="20%">Açao</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->user->name }}</td>
                    <td>{{ $client->user->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->city }}</td>
                    <td>
                        <a href="{{ route('admin.clients.edit', ['id' => $client->id]) }}" class="btn btn-default btn-sm">Editar</a>
                        <a href="{{ route('admin.clients.destroy', ['id' => $client->id]) }}" class="btn btn-danger btn-sm">Excluir</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $clients->render() }}
    </div>

@endsection