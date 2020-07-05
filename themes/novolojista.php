<?php $v->layout("_theme"); ?>
<form action="" class="form-group">
    <label>Nome do Estabelecimento</label>
    <input type="text" class="form-control">

    <label>E-mail</label>
    <input type="email" class="form-control">

    <fieldset>
        <legend>Endereço</legend>
        <label>Rua</label>
        <input type="text" class="form-control">

        <label>Número</label>
        <input type="number" class="form-control">

        <label>Bairro</label>
        <input type="text" class="form-control">

        <label>CEP</label>
        <input type="number" class="form-control">

        <label>Complemento</label>
        <input type="text" class="form-control">

    </fieldset>

    <span></span>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>