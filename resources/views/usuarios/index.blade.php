@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Lista de Usuarios</h3>
        </div>
        <div class="col-md-8">
            <a href="" class="btn btn-primary">Criar Usuario</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Carteira</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $nome->tipo }}</td>
                    <td>{{ $carteira->tipo }}</td>
                    <td>{{ $balance->tipo }}</td>
                    <td>
                        <ul class="list-inline">
                            <li>
                            <a href="">Editar</a>
                            </li>
                            <li>
                            <a href="">Deletar</a>
                            </li>
                            <li>
                            <a href="">Criar carteira</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection