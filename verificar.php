<?php

if(isset($_POST['enviar'])):
    
$email = $_POST['e-mail'];
$nome = $_POS['nome'];
$senha = $_POST['senha'];

echo $email. "<br>";

echo $nome. "<br>"; 

echo $senha. "<br>";

endif;
