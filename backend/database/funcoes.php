<?php
    require_once "./conexao.php";

    $conexao = new conexao();
    $mysql = $conexao->conn;

    function sanitizeStr($value){
        $value = trim($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        $value = addslashes($value);
        return $value;
    }

    function validateFeedback($userName, $answer1, $answer2, $answer3, $answer4, $answer5){
        if(empty($userName)){
            $userName = "empty";
        }
        if($answer2>3 || $answer2<1){
            $answer2 = 0;
        }
        if($answer5>5 || $answer5<0){
            $answer2 = 0;
        }
        $userName = sanitizeStr($userName);
        $answer1 = sanitizeStr($answer1);
        $answer3 = sanitizeStr($answer3);
        $answer4 = sanitizeStr($answer4);

        insertFeedback($userName, $answer1, $answer2, $answer3, $answer4, $answer5);
    }

    function insertFeedback($userName, $answer1, $answer2, $answer3, $answer4, $answer5){
        GLOBAL $mysql;
        $mysql->query("INSERT INTO feedback(userName, question1, question2, question3, question4, question5)
            VALUES('$userName', '$answer1', $answer2, '$answer3', '$answer4', $answer5);
        ");
    }
    
    function validateRequest($userName, $telephone, $email, $address, $serviceType, $message){
        if(empty($serviceType)) $serviceType = "none";
        $userName = sanitizeStr($userName);
        $telephone = sanitizeStr($telephone);
        $email = sanitizeStr($email);
        $address = sanitizeStr($address);
        $serviceType = sanitizeStr($serviceType);
        $message = sanitizeStr($message);

        insertRequest($userName, $telephone, $email, $address, $serviceType, $message);
    }

    function insertRequest($userName, $telephone, $email, $address, $serviceType, $message){
        GLOBAL $mysql;
        $mysql->query("INSERT INTO request(userName, telephone, email, `address`, serviceTypes, `message`)
            VALUES('$userName', '$telephone', '$email', '$address', '$serviceType', '$message');
        ");
    }
?>