@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <h3>Deletar carteira</h3>
    <form action={{route('carteira.destroy', ['carteira' => $wallet->id])}} method="post">
    @csrf
    @method('DELETE')
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div>
    <label for="id_usuario">ID USUARIO</label>
    <input type="text" id="id_usuario" name="id_usuario" value="{{$wallet->id_usuario}}" disabled>
    </div>
    
    <div class="alert alert-danger" role="alert">Esta operação não poderá ser desfeita! Confirma a exclusão do usuario?</div>
    <div class="form-group">
      <input type="submit" name="delete_wallet" value="Deletar Carteira">
      <input type="submit" name="cancel" value="Cancelar">
      </div>
  </div>
  </form>
</div>
@endsection