@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Produtos</h3>

    <a href="{{ route('admin.products.create') }}" class="btn btn-success">Novo produto</a>
    <br>
    <br>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th width="5%">#</th>
            <th width="30%">Nome</th>
            <th width="30%">Categoria</th>
            <th width="10%">Preço</th>
            <th width="25%">Açao</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{ route('admin.products.edit', ['id' => $product->id]) }}" class="btn btn-default btn-sm">Editar</a>
                <a href="{{ route('admin.products.destroy', ['id' => $product->id]) }}" class="btn btn-danger btn-sm">Excluir</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $products->render() }}
</div>

@endsection