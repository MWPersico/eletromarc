<?php
    require_once('./funcoes.php');
    
    if(isset($_POST)){
        validateFeedback(
            $_POST['name'],
            $_POST['question1'],
            $_POST['question2'],
            $_POST['question3'],
            $_POST['question4'],
            $_POST['question5']
        );
        unset($_POST);
    }

    header("Location: ../../");
?>