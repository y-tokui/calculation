<?php
    if ($_POST['digit'] == 1){
        $rand_max = 9;
    } else {
        $rand_max = 99;
    }

    $questions = 5;

    if ($_POST['plus'] === "+" && $_POST['minus'] === "-"){
        $operand = ["+", "-"];
    }elseif ($_POST['plus'] === "+"){
        $operand = ["+"];
    }elseif ($_POST['minus'] === "-"){
        $operand = ["-"];
    }else{
        $operand = ["+"];
    }
    
    $rand = range(0, $rand_max);
    $x = array_rand($rand, $questions);
    $y = array_rand($rand, $questions);
    
?>

<p>計算練習</p>
<p>
    選択したのは0～<?php echo $rand_max; ?>までの問題です。<br/>
    全部で<?php echo $questions; ?>問出題します。
</p>
<form action="answers.php" method="post">
    <?php foreach ($x as $key => $value): ?>
        <p>   
            <?php 
                echo ($key + 1). "問目  ";
                echo $value . $operand[array_rand($operand)] . $y[$key] . "=";    
            ?>
            <input type='text' name='answer[]'><br>  
            <input type="hidden" name="x[]" value="<?php echo $value ?>">
            <input type="hidden" name="y[]" value="<?php echo $y[$key] ?>">
            <input type='hidden' name='operand[]' value='<?php echo $operand[array_rand($operand)]; ?>'>
        </p>
    <?php endforeach; ?>
    <input type="submit">
    <input type="reset"> 
</form>



