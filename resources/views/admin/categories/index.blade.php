@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Categorias</h3>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Açao</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection