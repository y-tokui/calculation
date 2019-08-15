<?php
    require_once('questions.php');

    function h($s) {
        return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
    }

    $x = $_POST["x"];
    $y = $_POST["y"];
    $operand = $_POST["operand"];
    $answer = $_POST["answer"];

    // 正誤判定
    function isCorrect($x, $y, $answer){
        if ($x + $y == $answer || $x - $y == $answer){
            return true;
        }else {
            return false;
        }
    }

    // 正解を表示
    function correctAnswer($x, $y, $operand){
        if ($operand === "+"){
            echo $x + $y ;
        }else{
            echo $x - $y ; 
        }
    }
    
?>


<p>計算練習結果</p>

