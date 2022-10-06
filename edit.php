<?php
$servidor = "127.0.0.1";

$usuario = "root";

$senha = "sebrae123";

$banco = "etec";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if(isset($_GET['Nome'])){
if($conexao -> connect_error)
{
    echo "Not possible this connection";
}
else
{
    echo "Connection is ready";
}

?>