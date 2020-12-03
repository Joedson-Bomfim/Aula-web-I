<?php
$host = 'localhost';
$user = 'root';
$pwd = '';
$db = 'dados';

$ligax = mysqli_connect($host, $user, $pwd) or die ('Não conseguiu fazer a conexão ao servidor');
mysqli_select_db($ligax, $db);