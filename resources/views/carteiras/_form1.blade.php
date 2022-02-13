<form action={{route('carteira.store')}} method="get">
    @csrf
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div>
        <label for="id_usuario">Id Usuario</label>
        <input type="text" id="id_usuario" name="id_usuario">
    </div>
    