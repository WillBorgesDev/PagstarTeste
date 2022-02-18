@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Historico de Movimentação</h3>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Tipo de Movimentação</th>
                    <th>Valor </th>
                    <th>Carteira </th>
                </tr>
            </thead>
            <tbody>
           
            @foreach($movements as $movement)
                <tr>
                    <td>{{ $movement->id          }}</td>
                    <td>{{ $movement->tipo        }}</td>
                    <td>{{ $movement->valor       }}</td>
                    <td>{{ $movement->carteira_id }}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$movements->links()}}
    </div>
    
    <div class="col-md-8">
            <a href="{{route('carteira.index')}}" class="btn btn-primary">Voltar</a>
    </div>
</div>
@endsection