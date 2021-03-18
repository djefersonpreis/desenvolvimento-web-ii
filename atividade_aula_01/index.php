<?php
require('autoload.php');

$conn = new Conexao();

$head = new Head("Projeto Web - Djeferson");
$head->addProp(new Meta("viewport", "width=device-width, initial-scale=1"));
$head->addProp(new Link("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css", "stylesheet", "sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl", "anonymous"));
$head->addProp(new Link("./style.css", "stylesheet",null, null));

$body = new Body();
$body->addProp(new Script("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js", "sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0", "anonymous", ""));

//$body->addProp(new Div("container", new Login()));

$container = new Div("container");

$barra = new Div("row", new Div("col bg-primary", "teste"));

$areaprincipal = new Div("row");

$miolo = new Div("col-sm-10 bg-danger");
if(isset($_GET["action"])){
	try{
		foreach ($conn->getSelect("SELECT * FROM ". $_GET["action"]) as $row) {
			$miolo->addElementToDiv($row [1] . "<br/>");
		}
	} catch (Exception $e){
		$miolo->addElementToDiv(new HeaderTitle("Registros Não encontrados. <br/> Selecione outra opção no menu"));
	}
	$miolo->addElementToDiv();
} else {
	$miolo->addElementToDiv("nenhum item selecionado");
}

$areaprincipal->addElementToDiv(new Menu());
$areaprincipal->addElementToDiv($miolo);

$container->addElementToDiv($barra);
$container->addElementToDiv($areaprincipal);

$body->addProp($container);

$html = new Html("pt-br", $head, $body);


echo (new Html("pt-br", $head, $body));



/**
*   <!doctype html>
*   <html lang="en">
*       <head>
*           <meta charset="utf-8">
*           <meta name="viewport" content="width=device-width, initial-scale=1">
*   
*           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
*   
*           <title>Hello, world!</title>
*       </head>
*       <body>
*           <h1>Hello, world!</h1>
*   
*           <!-- Optional JavaScript; choose one of the two! -->
*   
*           <!-- Option 1: Bootstrap Bundle with Popper -->
*           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
*   
*       </body>
*   </html>
*/