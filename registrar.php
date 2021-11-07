
<?php
    
    include("con_db.php"); /* incluyo el archivo donde se guardan las bd */

    /*
        if($conex){
            echo "todo correcto";
        }
        Aca verifico ademas de si esta incluido correctamente el archivo con la bd
         Si se guardo correctamente la bd en la variable conex
    */

    if(isset($_POST['register'])){
    /* 
        Si se presionó register (isset verifica si "register" en POST no es nula) 
        $_POST[''] lee lo que este en POST con nombre ''
    */

        if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['pass']) >= 1){
            /* 
                Si el tamaño "name" y "email" en POST son mayores o iguales a 1.
                (strlen devuelve la cantidad de caracteres que tiene)
            */

            $name = trim($_POST['name']) ;
            $email = trim($_POST['email']) ;
            $pass = password_hash(trim($_POST['pass']), PASSWORD_DEFAULT) ; // creo un hash de su contraseña
            /* 
                Guardo en las variables lo datos de POST
                (trim quita los espacios del principio y del final)
            */
            $fechareg = date("d/m/y"); //Guardo la fecha actual


            $consulta = "INSERT INTO datos(nombre, email, pass, fechareg) VALUES ('$name','$email','$pass','$fechareg')";
            /*
                Guardo en la variable consulta el query necesario de mysql para agregar los datos de POST guardados en las variables.
            */
            
            $resultado = mysqli_query($conex,$consulta);
            /*
                mysqli_query realiza una consula en la bd "conex" con la consula "consulta"
                y guarda en la variable resultado true si se realizo correctamente
            */

            if($resultado){
                /* 
                    Si resultado=true
                */

                /*
                    Agrega al codigo php el mensaje
                */
                ?> 
                    <h3 class="bad">¡Se ah registrado correctamente!</h3>
                <?php

            }else{
                /* 
                    Si resultado=false
                */

                ?> 
                    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                <?php
                /*
                    Agrega al codigo php el mensaje
                */
                
            }
        }else{
            /* 
                Si el tamaño "name" y "email" en POST son 0.
            */

            ?> 
                <h3 class="bad">¡Por favor complete los campos!</h3>
            <?php
            /*
                Agrega al codigo php el mensaje
            */

        }
    }

    
?>

