  <?php
class Pessoa{

public $nome;
public $email;
public $telefone;


public function Saldar(){
    $agora=date('H');   
    if($agora>=6 && $agora<=12)
       echo "bom diaaaa! ";
    else if($agora>12 && $agora<=17)
        echo "boa tarde ";
    else
        echo "boa noite ";
    
    }

    
public function Mostrar(){
    echo $this->nome."<br>";
    echo $this->email."<br>";
    echo $this->telefone;
}

public function Falar($p){
    echo "<br> $this->nome está falando com $p->nome";
    $p->Responder($this);
}

public function Responder($p){
    
    echo "<br>$this->nome está respondendo $p->nome ";

}


}
?>