<?php
  include "connection.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Convidados</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.css" />
    <script src="bootstrap\js\bootstrap.js"></script>
  </head>

  <body id="index">
    <div class="container">
      <form class="row d-flex mt-4" action="#" method="GET">
        <div class="mt-4 p-3 text-center mb-3">
        <h2>Lista de Convidados</h2>
      </div>
          <div class="col-auto">
          <input type="hidden" id="id_convidados" name ="id_convidados">
          <input type="text"class="form-control" id="Nome" name="Nome"placeholder="Nome"/>
          </div>
          <div class="col-auto">
            <input type="number"class="form-control" id="Acompanhantes" name="Acompanhantes" placeholder="Acompanhantes"/>
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-secondary mb-3">Salvar</button>
          </div>
        </form>
        <table class="table" id="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Acompanhantes</th>
              <th scope="col">O que deseja fazer?</th>
            </tr>
          </thead>
          <tbody>
          <?php
            foreach($resultado as $convidado) :
              ?>
            <tr>
              <td> <?php echo $convidado['cd_Convidados']?> </td>
              <td id="id_nome<?php echo $convidado['cd_Convidados']?>"><?php echo $convidado['nm_Convidados']?> </td>
              <td id="id_acomp<?php echo $convidado['cd_Convidados']?>"><?php echo $convidado['qt_Acompanhantes']?> </td>
              <td> <button type="button" class="btn btn-info" onclick="atualizar(<?php echo $convidado['cd_Convidados'];?>)"> Atualizar </button> </td>
              <td> <a href="excluir.php?id=<?php  echo $convidado['cd_Convidados'];?>"><button type="button" class="btn btn-danger">Excluir</button></a></td> 
              
            </tr>
            <?php
        endforeach;
            ?>
        </table>
    </div>
    <script>
         function atualizar(id){
          var nome = document.getElementById("id_nome"+id).innerText;
          var acompanhante = document.getElementById("id_acomp"+id).innerText;
          document.getElementById("Nome").setAttribute('value',nome);
          document.getElementById("Acompanhantes").setAttribute('value',acompanhante); 
          document.getElementById("id_convidados").setAttribute('value',id);
          alert(nome);
      }
    </script>
  </body>
  </html>