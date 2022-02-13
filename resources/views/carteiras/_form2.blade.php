<form action={{route('carteira.store')}} method="post">
    @csrf
    <input type="hidden" id="redirect_to" name="redirect_to" value={{URL::previous()}}>
    <div>
        <label for="saldo">Saldo Inicial</label>
        <input type="floatval" id="saldo" name="saldo">
    </div>
