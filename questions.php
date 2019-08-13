<p>計算練習</p>
<p>
  <?php
    if ($_POST['digit'] == 1){
      $rand_max = 9;
    } else {
      $rand_max = 99;
    }
    echo "選択したのは0～{$rand_max}までの問題です。<br/>
          全部で5問出題します。";

    if ($_POST['plus'] === "plus" && $_POST['minus'] === "minus"){
      $ope = ["+", "-"];
    }elseif ($_POST['plus'] === "plus"){
      $ope = "+";
    }
    elseif ($_POST['minus'] === "minus"){
      $ope = "-";
    }else{
      $ope = "+";
    }
    // var_dump($ope);
  ?>
</P>

  <form action="answers.php" method="post">
    <?php
    for($i=0; $i<5; $i++){
      $x = rand(0, $rand_max);
      $y = rand(0, $rand_max);
      $ope_rand = $ope[array_rand($ope)];
      echo $i+1 . "問目  ";
      echo "{$x} {$ope_rand} {$y} = " ;
      print("<input type='text' name='ans{$i}'><br>");
      print("<input type='hidden' name='x{$i}' value='{$x}'>");
      print("<input type='hidden' name='y{$i}' value='{$y}'>");
      print("<input type='hidden' name='ope{$i}' value='{$ope_rand}'>");
    }
    ?>
    <br>
    <input type="submit">
    <input type="reset"> 
  </form>