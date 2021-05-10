
<?php
require('autoload.php');

session_start();
if(!isset($_SESSION['NUM'])){
    $_SESSION['NUM'] = 0;
    $_SESSION['RESULTADO'] = 0;
    $_SESSION['OPERADOR'] = '';
}
if(isset($_POST['num'])){
    if($_SESSION['NUM'] == 0){
        $_SESSION['NUM'] = $_POST['num'];
    } else {
        $_SESSION['NUM'] = $_SESSION['NUM'] . $_POST['num'];
    }
}
if(isset($_POST['op'])){
    switch ($_POST['op']){
        case 'CE':
            $_SESSION['RESULTADO'] = 0;
            $_SESSION['OPERADOR'] = '';
            $_SESSION['NUM'] = 0;
            break;
        case '=':
            realizaCalculo();
            $_SESSION['NUM'] = $_SESSION['RESULTADO'];
            $_SESSION['RESULTADO'] = 0;
            break;
        case '+':
            if($_SESSION['OPERADOR'] != ''){
                realizaCalculo();
            }
            $_SESSION['OPERADOR'] = '+';
            $_SESSION['RESULTADO'] = $_SESSION['NUM'];
            $_SESSION['NUM'] = 0;
            break;
        case '-':
            if($_SESSION['OPERADOR'] != ''){
                realizaCalculo();
            }
            $_SESSION['OPERADOR'] = '-';
            $_SESSION['RESULTADO'] = $_SESSION['NUM'];
            $_SESSION['NUM'] = 0;
            break;
        case 'X':
            if($_SESSION['OPERADOR'] != ''){
                realizaCalculo();
            }
            $_SESSION['OPERADOR'] = 'X';
            $_SESSION['RESULTADO'] = $_SESSION['NUM'];
            $_SESSION['NUM'] = 0;
            break;
        case '%':
            if($_SESSION['OPERADOR'] != ''){
                realizaCalculo();
            }
            $_SESSION['OPERADOR'] = '%';
            $_SESSION['RESULTADO'] = $_SESSION['NUM'];
            $_SESSION['NUM'] = 0;
            break;
    }
}

function realizaCalculo(){
    switch ($_SESSION['OPERADOR']){
        case '+':
            $_SESSION['RESULTADO'] = $_SESSION['RESULTADO'] + $_SESSION['NUM'];
            break;
        case '-':
            $_SESSION['RESULTADO'] = $_SESSION['RESULTADO'] - $_SESSION['NUM'];
            break;
        case 'X':
            $_SESSION['RESULTADO'] = $_SESSION['RESULTADO'] * $_SESSION['NUM'];
            break;
        case '%':
            $_SESSION['RESULTADO'] = floatval($_SESSION['RESULTADO']) / floatval($_SESSION['NUM']);
            break;
    }
    $_SESSION['OPERADOR'] = '';
    $_SESSION['NUM'] = 0;
}

$head = new Head("Calculadora PHP POO");
$head->addProp(new Meta("viewport", "width=device-width, initial-scale=1"));
$head->addProp(new Link("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css", "stylesheet", "sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl", "anonymous"));
$head->addProp(new Link("./css/style.css", "stylesheet",null, null));

$body = new Body();
$body->addProp(new MontaCalculadora( ($_SESSION['NUM'] <> 0 ? $_SESSION['NUM'] : $_SESSION['RESULTADO']) ));

echo (new Html("pt-br", $head, $body));

?>
</body>
</html>