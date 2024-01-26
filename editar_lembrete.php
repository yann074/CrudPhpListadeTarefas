<?php

$sql = "SELECT * FROM lista WHERE id= " . $_REQUEST['id'];

$res = $conn->query($sql);

$row = $res-> fetch_object();
?>
<form action="?page=salvar" method="POST" class="editar">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
             <label for="">Altere o titúlo</label>
             <input type="text" placeholder="ex: problemas" name="titulo" value="<?php print $row->titulo; ?>">
             <label for="">Altere a descrição</label>
             <input type="text" placeholder="Erro no front-end" name="descricao" value="<?php print $row->descricao; ?>">
             <label for="">status</label>
             <select name="statuss" value="<?php print $row->statuss; ?>">
        <option value="1">Pendente</option>
        <option value="2">Executando</option>
        <option value="3">Concluída</option>
            </select>
             <label for="">Altere a data</label>
             <input type="date" name="data_conc" value="<?php print $row->data_conc; ?>">
             <div>
    <button type="submit" >Enviar</button>
</form>



