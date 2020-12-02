<?php
session_start();

$login = $_POST["login"];
$senha = $_POST["senha"];

if ($login=="admin" && $senha=="1234") {
    $_SESSION["autenticado"]=true;

    $html ="
    <!doctype>
    <html>
        <head> <title> Página de verificação </title></head>
        <body>
    
           <script>
    window.location.replace('https://av-html-202001197079.000webhostapp.com/menu.php');
           </script>
      
        </body>
    </html>
    
    ";
    
}else {
    session_destroy();
    $html ="
<!doctype>
<html>
    <head> <title> Página de verificação </title></head>
    <body>

        <h1>Seu login: $login e sua senha = $senha Não Apresenta no Banco</h1>
  
    </body>
</html>

";

}

echo $html;

?>