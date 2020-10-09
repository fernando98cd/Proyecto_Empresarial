<?php
include_once("clases/conexion.php");
include_once("clases/usuario.php");
include_once("clases/ctrl_session.php");
//---------- USES DE LAS CLASES DE NAMESPACES ----
use \clases\ctrl_session\Ctrl_Session;
use \clases\conexion\Conexion;
use \clases\usuario\Usuario;
//-----------------------------------------------

$cnx = new Conexion();
$usuario = new Usuario($cnx);

$id = 0;
$login = "";
$password = "";

$error = "";

//=================verificnado metodo post
//funciones
function procesarIniciarSession()
{
    //se pone global para acceder a las variables globales desde una funcion
    global $usuario;
    global $login;
    global $password;
    global $error;


    $login = $_POST["txtLogin"];
    $password = $_POST["txtPassword"];

    if ($usuario->loguear($login, $password) == true) {
        //guardar datos en la session 
        // $_SESSION["login_usuario"]=$login;
        // $_SESSION["id_usuario"] = $cliente->get_id();
        // $_SESSION["nombre_usuario"] = $cliente->get_nombre();
        Ctrl_Session::iniciar_session($login, $usuario->get_id(), $usuario->get_nombre());
        header("location:formularios/index.php?msg=logueado correctamente");
    } else {
        $error = "Error al iniciar revise sus datos de acceso";
    }
}
if (isset($_POST["btnAceptar"])) {
    procesarIniciarSession();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("incluir_estilos_encabezado.php"); ?>
    <title>Login</title>
</head>

<body>
    <?php include("incluir_menu_principal.php"); ?>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>RossMotors</h1>
        </div>
        <div class="login-box">
            <form class="login-form" action="frmlogin.php" method="POST">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Iniciar Seccion</h3>
                <div class="form-group">
                    <label class="control-label">LOGIN</label>
                    <input class="form-control" type="text" id="txtLogin" name="txtLogin" value="<?php echo $login ?>">
                </div>
                <div class="form-group">
                    <label class="control-label">PASSWORD</label>
                    <input class="form-control" type="password" id="txtPassword" name="txtPassword" value="<?php echo $password ?>">
                </div>
                <div class="form-group">
                    <div class="utility">
                        <div class="animated-checkbox">
                            <label>
                                <input type="checkbox"><span class="label-text">Permanecer</span>
                            </label>
                        </div>
                        <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Olvido Password?</a></p>
                    </div>
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-dark btn-block" name="btnAceptar" value="Aceptar"><i class="fa fa-sign-in fa-lg fa-fw"></i>INGRESAR</button>
                </div>
            </form>
            <!-- ------------------------------------------------------------------------------------------------- -->
            </form>
            <form class="forget-form" action="frmlogin.html">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Reestablcer</h3>
                <div class="form-group">
                    <label class="control-label">EMAIL</label>
                    <input class="form-control" type="text" placeholder="Email">
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
                </div>
                <div class="form-group mt-3">
                    <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
                </div>
            </form>
            <!-- -------------------------------------------------------------------------------------------------------- -->
        </div>
    </section>


    <?php include("incluir_estilos_pie.php"); ?>
</body>

</html>