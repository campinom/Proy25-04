<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $micon = new mysqli("localhost", "root", "avaras08", "datospersonales");
        
        if ($micon->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $micon->connect_errno . ") " . $micon->connect_error;
        }
        echo $micon->host_info . "\n";
         if($resultado = $micon->query("SELECT * FROM persona"))
                   echo "La seleccion devolvió #", $resultado->num_rows."filas";
         
                   $resultado->close;
                   
        ?>
        
      
    </body>
</html>
