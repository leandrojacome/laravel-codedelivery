@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Categorias</h3>

    <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Nova categoria</a>
    <br>
    <br>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th width="5%">#</th>
            <th width="60%">Nome</th>
            <th width="35%">Açao</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <a href="{{ route('admin.categories.edit', ['id' => $category->id]) }}" class="btn btn-default btn-sm">Editar</a>
                <a href="{{ route('admin.categories.destroy', ['id' => $category->id]) }}" class="btn btn-danger btn-sm">Excluir</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{ $categories->render() }}
</div>

@endsection