<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
    <h3><title>Arrays</title></h3>
    </head>
    <body>
        <h1>Listado de las personas</h1>
        <?php
            $cabecera= array("nombre","direccion","telefono","fecha de cumpleaños","color favorito","significado");
            $p1=array("armando muritos","calle 3 ","1234567","09-12","amarillo");
            $p2=array("fernando malito","carrera 19 ","9876543","28-02","azul");
            $p3=array("pegando brinquitos","carrera 19 calle 2 ","5643217","15-08","rojo");
            $key=array("amarillo"=>"alegria","rojo"=>"furia","azul"=>"armonia");
            $directorio=array($p1,$p2,$p3);
            
        ?>
        <table border="1" width="60%" cellspacing="0">
            <?php
                echo "<tr style=font-weight:bold >";
                foreach ($cabecera as $elemento){
                    echo "<td align=center>$elemento</td>";
                }
                echo "</tr>";
                echo "<tr style=font-weight:bold>";
                foreach($directorio as $p){
                    echo "<tr>";
                    foreach ($p as $llave =>$celda){
                        echo "<td align=center>$celda</td>";
                        if($llave==4){
                            echo "<td align=center>";
                                echo isset($key[$celda])? $key[$celda]:"no tiene significado";
                            echo"</td>";
                        }
                    }
                    echo "</tr>";
                  
                }
                echo "</tr>"
            ?>
    <p >mi nombre es juan camilo castillo sanchez estoy viendo el curso de desarrollo web en php este es la evidencia 2 de la unidad 2 taller de arreglos </p>      
    </body>
</html>
