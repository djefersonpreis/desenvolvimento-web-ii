<?php
spl_autoload_register(function($class) {
    $arquivo = $_SERVER["DOCUMENT_ROOT"]
    ."/desenvolvimento-web-ii/atividade_aula_01/lib/".$class.".class.php";
 
    if (file_exists($arquivo)) {
        require $arquivo;
    }
});