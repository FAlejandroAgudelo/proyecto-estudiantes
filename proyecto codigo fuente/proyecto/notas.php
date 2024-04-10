 <?php

    include 'conexion.php';
    $con = conexion();

        if($_POST) {

            $materia = $_POST['materia'];
            $nota1 = $_POST['textN1'];
            $nota2 = $_POST['textN2'];
            $nota3 = $_POST['textN3'];
            $fecha = date("d/m/y");
            $carrera = $_POST['carrera'];
           
            
            if ($nota1<0 || $nota1>5){
                echo "<h3>La nota 1 debe estar entre 0 y 5</h3>";
            } elseif($nota2<0 || $nota2>5){
                echo "<h3>La nota 2 debe estar entre 0 y 5</h3>";
            } elseif($nota3<0 || $nota3>5){
                echo "<h3>La nota 3 debe estar entre 0 y 5</h3>";
            }else{
                $promedio = ($nota1+$nota2+$nota3);
                $promedio /= 3;
                print "El promedio es: $promedio <br>";

                if($promedio >=3){
                    print "Aprobado";
                    if($promedio ==5){
                        print " ¡felicitaciones!";
                    }
                }else{
                    print "Reprobado";
                    }
                }
                $consulta = "INSERT INTO notas (codigo,materia,nota1,nota2,nota3,promedio,fecha,carrera)VALUES(default,'$materia','$nota1','$nota2','$nota3','$promedio','$fecha','$carrera')";

                $resultado = pg_query($con, $consulta); 

                if($resultado){
                    echo "<h2>Se guardaron los datos.</h2>";
                }else{
                    echo "<h2>No se guardaron los datos.</h2>";
                }

                
            }
            
        ?>

    
</body>
</html>