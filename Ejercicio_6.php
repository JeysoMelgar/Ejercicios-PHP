<!DOCTYPE html>
<html>
<body>
<h1>Ejercicio 6</h1>

<?php
header("Content-type: text/html;charset=\"utf-8\"");
/* 
 Envio de informacion entre el lado del navegador y el lado del servidor
*/
echo"<h1>".$_GET['clase']."</h1>";
echo"<h2>".$_GET['periodo']."</h2>";

echo"<h1>".$_GET['nombre']."</h1>";
echo"<h2>".$_GET['apellido']."</h2>";

if(is_numeric($_GET['edad']) && $_GET['edad']>=1){
echo "<h3>Bienvenido(a)".$_GET['nombre']." ".$_GET['apellido']."</h3>";
}
else{
    echo "<h3>No es una edad valida</h3>";
}
?>

<form>
Escribe tu nombre completo:
<input name="nombre"type="text" placeholder="Escribe nombre">
<input name="apellido"type="text" placeholder="Escribe Apellidos">
<input name="edad"type="text" placeholder="Escribe edad">
<input type="submit" value="registrar" >
</form>
</body>
</html>