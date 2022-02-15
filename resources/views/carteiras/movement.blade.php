@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <h3>Editar Usuario</h3>
    <form action={{route('carteira.update', ['carteira' => $wallet])}} method="post">
        @csrf
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value={{$wallet->id}}>
        <div>
            <label for="saldo">Depositar</label>
            <input type="text" id="saldo" name="saldo" value="">
        </div>
            <div class="form-group">
                <input type="submit" name="save_user" value="Cofirmar deposito">
                <input type="submit" name="cancel" value="Cancelar">
            </div>
    </div>    
    </form>
</div>
@endsection