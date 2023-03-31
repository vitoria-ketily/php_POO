<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formulario.php" method="post">
        <center>
           <h1><u>A classe pessoa:</u></h1>
            Nome: 
            <input type="text" name="nome" placeholder="Digite para da pessoa"><br><br>
            Telefone:
            <input type="tel" name="telefone" required placeholder="(xx)x xxxx-xxxx"><br><br>
            E-mail:
            <input type="email" name="e-mail" placeholder="email"><br><br>

            <input type="submit" value="confirmar">

        </center>
    </form>
</body>
</html>

<?php
include "Pessoa.php";

$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['e-mail'];
date_default_timezone_set("America/Sao_Paulo");


$voce=new Pessoa();
$voce->Saldar();

$voce->nome=$nome;
$voce->email=$email;
$voce->telefone=$telefone;
$voce->Mostrar();

$ele=new Pessoa();
$ele->nome="Wendel";
$ele->Falar($voce);



?>

