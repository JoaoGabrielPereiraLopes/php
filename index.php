<style>
    body{
     background-color: black;
     color: white;   
    }
</style>
<?php
$request_uri = $_SERVER['REQUEST_URI'];
// Separa o pathname dos parâmetros de consulta
$parsed_url = parse_url($request_uri);
$pathname = $parsed_url['path']; // Captura apenas o pathname
header("Content-Type: text/html");
if('/legal'==$pathname){
    $cor=$_GET['cor'];
    $especie=$_GET['especie'];
    $cpf=$_GET['CPF'];
    echo "sua cor é $cor<br>";
    echo "sua especie é $especie<br>";
    echo "seu cpf é $cpf";
}
else if('/exemplo'==$pathname){
    readfile("exemplo.html");
}
else if('/form'==$pathname){
    readfile("form.html");
}
else{
    echo $pathname;
}
?>