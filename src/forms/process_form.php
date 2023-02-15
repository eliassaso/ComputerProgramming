<?php
    if(isset ($_POST['nombre'])){
        $name = $_POST['nombre'];
        $age = $_POST['age'];
        //echo "$name $age";
        header("Location: redireccionado.php?name=$name&age=$age");

    }

?>