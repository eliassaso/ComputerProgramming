<?php

    if(isset ($_POST['nombre'])){

        $name = $_POST['nombre'];
        $age = $_POST['age'];

        session_start();
        $_SESSION['mi_sesion'] = "sesion 1";
        $_SESSION['usuario_en_sesion'] = $name;
        $_SESSION['count'] = 1;

        //echo "$name $age";
        header("Location: ../Models/loginModel.php?name=$name&age=$age");

    }
?>