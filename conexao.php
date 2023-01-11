<?php

define ('HOST','localhost');
define ('USUARIO','root');
define ('SENHA','123456');
define ('DB','clbcnm');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('falha');

?>