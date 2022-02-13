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
            @foreach($carteiras as $careira)
                <tr>
                    <td>{{ $careira->id          }}</td>
                    <td>{{ $careira= model1::find(1)->model2; }}</td>
                    <td>{{ $careira->saldo       }}</td>
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