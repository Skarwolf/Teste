<?php
//Conectando ao banco de dados "Corretor"
define('SERVER', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'Aguiar');

$conexao = mysqli_connect(SERVER, USUARIO, SENHA, DB);