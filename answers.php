<?php

    require('escape.php');

    $x = h($_POST["x"]);
    $y = h($_POST["y"]);
    $operand = h($_POST["operand"]);
    $answer = h($_POST["answer"]);

    // 正誤判定
    function isCorrect($x, $y, $answer){
        if ($x + $y == $answer || $x - $y == $answer) {
            return true;
        } else {
            return false;
        }
    }

    // 答えを表示
    function correctAnswer($x, $y, $operand){
        if ($operand === "+") {
            echo $x + $y ;
        } else {
            echo $x - $y ; 
        }
    }   
?>

<p>計算練習結果</p>

<?php foreach ($x as $key => $value): ?>
    <p>
        <?php 
            echo ($key + 1). "問目   ";
            echo $value . $operand[$key] . $y[$key] . "=" . $answer[$key];   
            echo isCorrect($value, $y[$key], $answer[$key]) ? "...正解" : "...不正解。答えは",correctAnswer($value, $y[$key], $operand[$key]),"<br>"
        ?>
    </p>
<?php endforeach; ?>
