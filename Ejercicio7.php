<!DOCTYPE html>
<html>
<body>
<h1>Ejercicio 6</h1>

<?php
header("Content-type: text/html;charset=\"utf-8\"");
/* 
 Envio de informacion entre el lado del navegador y el lado del servidor
*/
echo"<h1>".$_GET['primo']."</h1>";

for ($i=1; $i<=100; $i++) {
    if ($_GET['primo'($i)]){
        echo "<br>El numero ".$i." es primo";
    } else {
        echo "<br>El numero ".$i." NO es primo";
    }
}
?>

<form>
Escribe tu nombre completo:
<input name="primo"type="int" placeholder="Escribe numero par o impar">
<input type="submit" value="mostrar">
</form>
</body>
</html>