<?php

$sql = "SELECT * FROM lista";
$res = $conn->query($sql);

$qtd = $res -> num_rows;

if($qtd > 0){

    while($row = $res -> fetch_object()){

        ?>

                <!--<h1><?//echo $row -> id?></h1>-->
                <h4><? switch($row -> statuss){
            case 1:
                ?>
                <div class="listar">
                <h3 class="verm"><?echo $row -> titulo ?></h3>
                </div>
                <div class="descricao">
                <h4 class="verm"><?echo $row -> descricao?></h4>
                 <h4 class="verm"><?echo date("d/w/Y", strtotime($row ->data_conc))?></h4>
                 <?
                print "<h5 class=\"verm\" class=\"teste\">PENDENTE </h5>";
                ?>
                <?print"<button onclick=\"location.href='?page=editar&id=". $row->id ."'\">editar</button>"?>
                <?print"<button onclick=\"location.href='?page=salvar&acao=excluir&id=". $row->id ."';\">excluir</button>"?>

                </div>
                <?
               
            break;
            case 2:
                ?>
                <div class="listar">
                <h3 class="ama"><?echo $row -> titulo ?></h3>
                </div>
                <div class="descricao">
                <h4 class="ama"><?echo $row -> descricao?></jh4>
                 <h4 class="ama"><?echo date("d/w/Y", strtotime($row ->data_conc))?></h4>
                 <?
                print "<h5 class=\"ama\" class=\"teste\">EXECUTANDO </h5>";
                ?>
                <?print"<button onclick=\"location.href='?page=editar&id=". $row->id ."'\">editar</button>"?>
                <?print"<button onclick=\"location.href='?page=salvar&acao=excluir&id=". $row->id ."';\">excluir</button>"?>

                </div>
                <?
            break;
            case 3:
                ?>
                <div class="listar">
                <h3 class="verd"><?echo $row -> titulo ?></h3>
                </div>
                <div class="descricao">
                <h4 class="verd"    ><?echo $row -> descricao?></h4>
                 <h4 class="verd"><?echo date("d/w/Y", strtotime($row ->data_conc))?></h4>
                 <?
                print "<h5 class=\"verd\"  class=\"teste\">CONCLUÍDO </h5>";
                ?>
                <?print"<button onclick=\"location.href='?page=editar&id=". $row->id ."'\">editar</button>"?>
                <?print"<button onclick=\"location.href='?page=salvar&acao=excluir&id=". $row->id ."';\">excluir</button>"?>

        </div>
        <?
        
        break;
        }?></h4>


        <?
  
    }
}else{
    print '<script>alert("Sem resultados de busca");</script>';
}
