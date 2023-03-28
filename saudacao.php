<?php

function saudacao($nome=''){
    date_default_timezone_set ("America/Sao_Paulo");

$agora=date('H');
if($agora>=6 && $agora<=12)
   return "bom diaaaa!";
else if($agora>12 && $agora<=17)
    return "boa tardeee!$nome";
else
    return "boa noiteee!$nome";

}
$login=$_POST['nome1'];
echo saudacao($login);


?>