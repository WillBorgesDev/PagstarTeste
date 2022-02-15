<form action={{route('usuario.store')}} method="post">
    @csrf
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div>
        <label for="nome">Nome do Usuario</label>
        <input type="text" id="nome" name="nome">
    </div>
