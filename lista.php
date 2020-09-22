<?php

require_once('./crud.php');

foreach(fbGetUsuario() as $usuario){
    echo"<a href='usuario.php?id=" . md5($usuario['id']) . "'>{$usuario['nome']}</a><br>";
} else {
    echo json_encode(fnGetUsuarios());
}