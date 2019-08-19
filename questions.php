<?php
    if ($_POST['digit'] === 1) {
        $rand_max = 9;
    } else {
        $rand_max = 99;
    }

    const QUESTIONS_NUM = 5;

    if ($_POST['plus'] === "+" && $_POST['minus'] === "-") {
        $operand_array = ["+", "-"];
    } elseif ($_POST['plus'] === "+") {
        $operand_array = ["+"];
    } elseif ($_POST['minus'] === "-") {
        $operand_array = ["-"];
    } else {
        $operand_array = ["+"]; 
    }

    $rand = range(0, $rand_max);
    $x = array_rand($rand, QUESTIONS_NUM);
    $y = array_rand($rand, QUESTIONS_NUM);
    for ($i = 1; $i <= QUESTIONS_NUM; $i ++) {
      $operand[] = $operand_array[array_rand($operand_array)];
    }
?>

<p>計算練習</p>
<p>
    選択したのは0～<?php echo $rand_max; ?>までの問題です。<br/>
    全部で<?php echo QUESTIONS_NUM; ?>問出題します。
</p>
<form action="answers.php" method="post">
    <?php foreach ($x as $key => $value): ?>
        <p>   
            <?php 
                echo ($key + 1). "問目  ";
                echo $value . $operand[$key] . $y[$key] . "=";    
            ?>
            <input type='text' name='answer[]'><br>  
            <input type="hidden" name="x[]" value="<?php echo $value ?>">
            <input type="hidden" name="y[]" value="<?php echo $y[$key] ?>">
            <input type='hidden' name='operand[]' value='<?php echo $operand[$key]; ?>'>
        </p>
    <?php endforeach; ?>
    <input type="submit">
    <input type="reset"> 
</form>