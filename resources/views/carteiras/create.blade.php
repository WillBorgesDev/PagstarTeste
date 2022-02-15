@extends('layouts.app')
 
@section('content')
<div class="container">
        <div class="row">
            <h3>Nova carteira</h3>
            @include('carteiras._form')
            <div class="form-group">
                <input type="submit" name="save_wallet" value="Salvar carteira">
                <input type="submit" name="cancel" value="Cancelar">
            </div>
            
        </div>
    </form>
</div>
@endsection