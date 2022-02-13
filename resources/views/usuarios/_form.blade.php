<form action={{route('usuario.store')}} method="post">
    @csrf
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div>
        <label for="nome">Nome do Usuario</label>
        <input type="text" id="nome" name="nome">
    </div>
    <!-- <div>
        <label for="carteira">Carteira do Usuario</label>
        <input type="" id="carteira" name="carteira">
    </div> -->
    <!-- <div>
        <label for="saldo">Saldo do Usuario</label>
        <input type="text" id="saldo" name="saldo">
    </div> -->