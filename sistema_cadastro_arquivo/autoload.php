<?php
spl_autoload_register(function($class) {
    $arquivo = $_SERVER["DOCUMENT_ROOT"]
    ."/desenvolvimento-web-ii/sistema_cadastro_arquivo/lib/".$class.".class.php";
 
    if (file_exists($arquivo)) {
        require $arquivo;
    }
});