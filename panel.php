<?php
    $usuario=$_POST['v_user'];
    $contrasenia=$_POST['v_password'];
echo "<div class='panel_superior'> ";
if($usuario=="miriam" && $contrasenia=="root"){
    echo "Bienvenida Miriam";
    echo "<a href='index.html'>Salir</a>";
}else{
    echo "Usuario incorreto";
    header('location:index.html');
}

echo "</div> ";
?>