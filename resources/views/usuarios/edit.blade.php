@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <h3>Editar Usuario</h3>
    <form action={{route('usuario.update', ['usuario' => $user])}} method="post">
        @csrf
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value={{$user->id}}>
        <div>
            <label for="Nome">Editar Nome</label>
            <input type="text" id="nome" name="nome" value="{{$user->nome}}">
        </div>
            <div class="form-group">
                <input type="submit" name="save_user" value="Atualizar Usuario">
                <input type="submit" name="cancel" value="Cancelar">
            </div>
    </div>    
    </form>
</div>
@endsection