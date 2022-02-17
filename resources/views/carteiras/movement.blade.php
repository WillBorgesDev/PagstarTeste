@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <h3>Realizar Movimentação</h3>
    <form action={{route('carteira.update', ['carteira' => $wallet])}} method="post">
        @csrf
        @method('PUT')
        <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
        <input type="hidden" id="id" name="id" value={{$wallet->id}}>
        <div>
            <label for="tipo">Tipo de Movimentação</label>
            <input type="text" id="tipo" name="tipo" value="">
        </div>
        <div>
            <label for="valor">Valor</label>
            <input type="text" id="valor" name="valor" value="">
        </div>
            <div class="form-group">
                <input type="submit" name="save_user" value="Cofirmar deposito">
                <input type="submit" name="cancel" value="Cancelar">
            </div>
    </div>    
    </form>
</div>
@endsection