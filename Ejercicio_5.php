<!DOCTYPE html>
<html>
<body>
<h1>Ejercicio 5</h1>
<?php
 header ("Content-type: text/html;charset=\"utf-8\"");
 for($i=1;$i<=10;$i++)
 {
    echo "<p>$i</p>";
 }
 echo "<p>Finaliza ciclo for</p>";

 for($i=10;$i>=0;$i--)
 {
     echo "<p>$i</p>";
 }
 echo "<p>Finaliza ciclo for</p>";
 $familia = array("Maria","Ana","Jose","Pedro");
// agregando while
 $arrayLength = count($familia);
        
        $i = 0;
        while ($i < $arrayLength)
        {
            echo $familia[$i] ."<br />";
            $i++;
        }

        echo "<p>muestra del ciclo while</p>";

 for ($i=0;$i<=sizeof($familia);$i++){
     echo "<h2> $familia[$i] numero de elemento $i</h2>";
     echo"<br>";
 }

 

?>

</body>
</html>