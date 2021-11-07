
<?php

include("con_db.php");


if(isset($_POST['loginto'])){

    if(strlen($_POST['username']) >= 1 && strlen($_POST['pass']) >= 1){
        
        $name = trim($_POST['username']) ;
        $pass = trim($_POST['pass']) ;

        $consulta = "SELECT * FROM `datos` WHERE nombre='$name'";
        $resultado = mysqli_query($conex,$consulta);

        if($resultado){

            $row=mysqli_fetch_row($resultado) ; // escanea todas las filas del resultado de la consula
            
            if($row != null && password_verify($pass, $row[3])){
                echo "Te has logeado correctamente" ;


            }else{
                echo "Contraseña o usuario incorrecto" ;
            }
            
        }else{
            echo "Error en el sistema" ;
        }
    }else{
        echo "Complete los campos" ;
    }
    
    
}



?>