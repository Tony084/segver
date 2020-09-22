<?php
    require_once('./creud.php');
    require_once('./decode_md5.php');

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');


    if(isset($_GET['id'])){
        echo json_encode(fnGetUsuario(decrypt_md5($_GET['id'], "")));
    }



