@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Carteira</h3>
        </div>
        <div class="col-md-8">
            <a href="{{route('carteira.create')}}" class="btn btn-primary">Criar Carteira</a>
        </div>
        <hr>
        <div class="col-md-8">
            <a href="{{route('extrato.index')}}" class="btn btn-primary">Ver Movimentações</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Saldo </th>
                </tr>
            </thead>
            <tbody>
            @foreach($carteiras as $carteira)
                <tr>
                    <td>{{ $carteira->id          }}</td>
                    <td>{{ $carteira->usuario_id }}</td>
                    <td>{{ $carteira->saldo       }}</td>
                    <td>
                        <ul class="list-inline">
                            <li>
                            <a href="{{route('carteira.movement', ['carteira' => $carteira])}}">Movimentar</a>
                            </li>
                            <li>
                            <a href="{{route('carteira.delete', ['carteira' => $carteira])}}">Deletar</a>
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