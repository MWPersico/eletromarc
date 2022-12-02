<?php
    require_once "./conexao.php";

    $conexao = new conexao();
    $mysql = $conexao->conn;

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

    function sanitizeStr($value){
        $value = trim($value);
        $value = strip_tags($value);
        $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        $value = addslashes($value);
        return $value;
    }

    function insertFeedback($userName, $answer1, $answer2, $answer3, $answer4, $answer5){
        GLOBAL $mysql;
        $mysql->query("INSERT INTO feedback(userName, question1, question2, question3, question4, question5)
            VALUES('$userName', '$answer1', $answer2, '$answer3', '$answer4', $answer5);
        ");
    }
    
?>