
<?php
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['e-mail'];

   date_default_timezone_set ("America/Sao_Paulo");
class Pessoa{

public $nome;
public $email;
public $telefone;


public function Saldar(){
    $agora=date('H');   
    if($agora>=6 && $agora<=12)
       echo "bom diaaaa! ";
    else if($agora>12 && $agora<=17)
        echo "boa tardeee !";
    else
        echo "boa noiteee !";
    
    }

    
public function Mostrar($nome,$email,$telefone){
    echo $nome."<br>";
    echo $email."<br>";
    echo $telefone;
}


public function Falar(){
    echo "<br> falando com outra pessoa.";
}


public function Responder(){
    echo "<br> respondendo outra pessoa.";
}

}


$voce=new Pessoa();
$voce->Saldar();
$voce->Mostrar($nome,$email,$telefone);
$voce->Falar();
$voce->Responder();

?>

