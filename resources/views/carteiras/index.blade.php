@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Carteira</h3>
        </div>
        <div class="col-md-8">
            <a href="" class="btn btn-primary">Criar Carteira</a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Balance</th>
                </tr>
            </thead>
            <tbody>
            @foreach($carteiras as $careira)
                <tr>
                    <td>{{ $wallet_id->id }}</td>
                    <td>{{ $balance->tipo }}</td>
                        <ul class="list-inline">
                            <li>
                            <a href="">Editar</a>
                            </li>
                            <li>
                            <a href="">Deletar</a>
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