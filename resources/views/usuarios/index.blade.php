@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Lista de Usuarios</h3>
        </div>
        <div class="col-md-8">
            <a href="{{route('usuario.create')}}" class="btn btn-primary">Criar Usuario</a>
            
        </div>

        <hr>
        
        <div class="col-md-8">
            <a href="{{route('carteira.index')}}" class="btn btn-primary">Ver Carteiras</a>
            
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    
                    <!-- <th>Saldo</th> -->
                </tr>
            </thead>
            <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id   }}</td>
                    <td>{{ $usuario->nome }}</td>
                    
                    <!-- <td>{{ $usuario->saldo }}</td> -->
                    <td>
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