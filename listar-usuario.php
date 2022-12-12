<h1>Listar Usuarios></h1>
<?php
    $sql = "SELECT * FROM usuarios";

    $res = $coon->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Cpf</th>";
        print "<th>Email</th>";
        print "<th>Acoes</th>";
        print "</tr>";
        while($row = $res-> fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->cpf."</td>";
            print "<td>".$row->email."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    
                    

                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id".$row->id."';}else{false;}\"
                    <button class='btn btn-danger'>Excluir</button>
                    </td>";

                    

                    
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Nao encontrou resultados!</p>";
    }
?>