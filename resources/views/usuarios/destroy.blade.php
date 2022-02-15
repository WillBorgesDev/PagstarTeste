@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <h3>Deletar Usuario</h3>
    <form action={{route('usuario.destroy', ['usuario' => $user->id])}} method="post">
    @csrf
    @method('DELETE')
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div>
    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome" value="{{$user->nome}}" disabled>
    </div>
    
    <div class="alert alert-danger" role="alert">Esta operação não poderá ser desfeita! Confirma a exclusão do usuario?</div>
    <div class="form-group">
      <input type="submit" name="delete_user" value="Deletar Usuario">
      <input type="submit" name="cancel" value="Cancelar">
      </div>
  </div>
  </form>
</div>
@endsection