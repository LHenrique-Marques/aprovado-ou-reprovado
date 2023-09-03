<?php
///Com Switch
$nota = 6;
switch ($nota) {
    case $nota >= 7:
        $mensagem = "Parabéns você foi aprovado!";
        break;
    
    case $nota <= 5:
        $mensagem = "Você está Reprovado!";
        break;
    case $nota < 7 and $nota > 5:
        $mensagem = "Você está em recuperação!";
        break;
    
    default:
        $mensagem = "Você não tirou uma nota valida.";
        break;
}
echo $mensagem . "<hr>";
///Com if e else
$nota2 = 4;


if ($nota2 >= 7) {
    $mensagem_if = "Parabéns você foi aprovado!";
}

elseif ($nota2 <=5) {
    $mensagem_if = "Você está Reprovado!";
}

elseif ($nota2 <7 and $nota >5) {
    $mensagem_if = "Você está em Recuperação!";
}
echo $mensagem_if
?>