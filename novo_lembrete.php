<form action="?page=salvar" method="POST" class="novo">
    <input type="hidden" name="acao" value="cadastrar">
             <label for="">Digite o título</label>
             <input type="text" placeholder="ESTUDAR PHP" name="titulo">
             <label for="">Digite a descrição</label>
             <input type="text" placeholder="APRENDER SOBRE..." name="descricao">
             <label for="">status</label>
             <select name="statuss">
        <option value="1">PENDENTE</option>
        <option value="2">EXECUTANDO</option>
        <option value="3">CONCLUÍDA</option>
            </select>
             <label for="">data</label>
             <input type="date" name="data_conc">
             <div>
    <button type="submit" class="enviar" >Enviar</button>
</form>


