<?php
$operacao = $_POST["operacao"];
switch ($operacao) {
  case 'adicao':
      echo somar($numbertwo = $_POST["numberone"],$numbertwo = $_POST["numbertwo"]);
    break;
  case "subtracao":
      echo subtrair($numbertwo = $_POST["numberone"],$numbertwo = $_POST["numbertwo"]);
      break;
  case "multiplicar":
      echo multiplicar($numbertwo = $_POST["numberone"],$numbertwo = $_POST["numbertwo"]);
      break;
  case "dividir":
      echo dividir($numbertwo = $_POST["numberone"],$numbertwo = $_POST["numbertwo"]);
      break;
}


function somar($numberone,$numbertwo){
  $result = $numberone + $numbertwo;
  return $result;
}
function subtrair($numberone,$numbertwo){
  $result = $numberone - $numbertwo;
  return $result;
}
function multiplicar($numberone,$numbertwo){
  $result = $numberone * $numbertwo;
  return $result;
}
function dividir($numberone,$numbertwo){
  $result = $numberone / $numbertwo;
  return $result;
}



?>
<!DOCTYPE html>
<head><link rel="stylesheet"href="index.css"></head>
       <body>
           <a href="inicio.php" target="rightframe"><input type="button" value="Voltar" /></a>
       </body>
</html>
