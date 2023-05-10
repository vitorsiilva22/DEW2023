<?php
$nome=$_POST['nome_usuario'];
$senha=$_POST['senha'];
echo "Seu nome é ".$nome."e sua senha é ".$senha;
if ($senha=="")
{
    echo "<br> Sua senha está vazia";
}

?>