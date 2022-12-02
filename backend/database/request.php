<?php
    require_once('./funcoes.php');
    
    if(isset($_POST)){
        validateRequest(
            $_POST['name'],
            $_POST['telephone'],
            $_POST['email'],
            $_POST['address'],
            $_POST['service-types'],
            $_POST['message']
        );
        unset($_POST);
    }

    header("Location: ../../");
?>