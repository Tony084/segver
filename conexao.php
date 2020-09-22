<?php

    define('__SERVER__','LOCALHOST');
    define('__USER__','root');
    define('__PASS__','');
    define('__DB__','segver');
    define('__PORT','3306');

    function abreConexao(){
        $slink = mysqli_connect(__SERVER__,__USER__,__PASS__,__DB__,__PORT__);
        mysqli_set_charset($link, 'utf8');
        return $link;
    }