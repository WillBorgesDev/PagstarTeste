@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <h3>Novo Usuario</h3>
        @include('usuarios._form')
        <div class="form-group">
            <input type="submit" name="save_user" value="Salvar Usuario">
            <input type="submit" name="cancel" value="Cancelar">
        </div>
    </div>
    </form>
</div>
@endsection