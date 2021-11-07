<!DOCTYPE html>

<html lang="es">

<head>
    
    <meta charset="UTF-8">
    <meta name="description" content="portafolio" />
	<meta name="author" content="nombre del autor" />
	<meta name="keywords" content="palabra clave1, palabra clave2, palabraclave3" />
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Sitio web</title>

    <!--Creo los estilos y todo-->
    <link rel="stylesheet" href="estiloInicio-Barrademenu.css">
    <link rel="stylesheet" href="estiloLogSignForm.css">
    <!---->
    <!--Creo el js del login/signin-->
    <script src="login.js"></script>


</head>

<body>

    <div class="contenedor">
    
        <!-- CABECERA MENUS -->  
    
        <header class="cabecera">

            <!-- BARRA MENUS -->
            
            <div class="barra-de-menu">
                <!-- Logo/Menu-->
                <a href="#" class="logo"> < Example/ > </a>
                <a href="#" class="menu-opc">   </a>
                
                <!--busquedas-->
                <div class="separador-busqueda">
                    <!--buscador-->
                    <input type="search" id="input-search" placeholder="buscar en Example.com">    
                    <!--contenidos de la busqueda-->
                    <div class="content-search">
                        <!--tabla de busqueda-->
                        <div class="content-table">
                            <table>
                                <thead>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="·">Inicio</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="·">Css</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="·">Index</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="·">Php</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="·">Inicio</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="·">Css</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="·">Index</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="·">Php</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="·">Inicio</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="·">Css</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="·">Index</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="·">Php</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!--items del menu-->
                <nav class="menu">
                    <ul class="listas-menu">
                        <div class="logsignin">
                            <li class="login"> <a href="#" onClick="showLogin()">Log in</a> </li>
                            <span id="line-login"></span>
                            <li class="sign"> <a href="#" onClick="showSignin()">Sign in</a> </li>
                            <li class="ingresar"> <a href="#">Sign up</a> </li>
                        </div>
                    </ul>
                </nav>

            </div>

        </header>
        
        <!--Login form-->
        <div class="login-container" id="loginclick">
            
            <div class="login-info-container">
                <h1 class="title">Log in with</h1>
                
                <div class="social-login">
                    <div class="social-login-element">
                        <img class="socialimg" src="images/google.svg" alt="google-image">
                        <span>Google</span>
                    </div>
                    <span class="divsocial"></span>
                    <div class="social-login-element">
                        <img class="socialimg" src="images/facebook.svg" alt="facebook-image">
                        <span>Facebook</span>
                    </div>
                </div>

                <p>or</p>

                <form action="" class="inputs-container" method=post>
                    <input name="username" class="input" type="text" placeholder="Username">
                    <input name="pass" class="input" type="password" placeholder="Password">
                    <p>forgot password? <span class="clickhere">click here</span></p>
                    <input name="loginto" type="submit"  class="login-btn"></input>
                    <p>dont have account? <span class="clickhere" onClick="showSignin()">Sign up</span></p> 
                </form>

            </div>
            
            <img class="login-image" src="images/loginimage.jpg" alt="login">
            
            <button class="close-login" onClick="closeLogin()">X</button>

        </div>

        <!--Signin form-->
        <div class="signin-container" id="signinclick">
            
            <div class="signin-info-container">
                <h1 class="title">Sign in with</h1>
                
                <div class="social-signin">
                    <div class="social-signin-element">
                        <img class="socialimg" src="images/google.svg" alt="google-image">
                        <span>Google</span>
                    </div>
                    <span class="divsocial"></span>
                    <div class="social-signin-element">
                        <img class="socialimg" src="images/facebook.svg" alt="facebook-image">
                        <span>Facebook</span>
                    </div>
                </div>

                <p>or</p>

                <form action="" class="inputs-container" method="post">
                    <input name="name" class="input" type="text" placeholder="Username">
                    <input name="email" class="input" type="text" placeholder="Email">
                    <input name="pass" class="input" type="password" placeholder="Password">
                    <input class="input" type="password" placeholder="Repeat password">
                    <input name="register" type="submit"  class="signin-btn"></input>
                    <p> have account? <span class="clickhere" onClick="showLogin()">Login</span></p> 
                </form>


            </div>
            
            <img class="signin-image" src="images/loginimage.jpg" alt="signin">
            
            <button class="close-signin" onClick="closeSignin()">X</button>

        </div>

        <!--Login Signin DB-->
        <?php
            include("registrar.php");
            include("ingresar.php");
        ?>
        <!--Evita que se reenvie el formulario al recargar la pagina-->
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
        
        
    </div>

    
    
        
</body>
            

</html>