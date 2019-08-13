<p>計算練習結果</p>

<?php
  for ($i=0; $i<5; $i++) {
    echo $i+1 . "問目  ";
    $x = $_POST["x{$i}"];
    $y = $_POST["y{$i}"];
    $ans_plus = $x + $y;
    $ans_minus = $x - $y;
    $ope = $_POST["ope{$i}"];
    $ans = $_POST["ans{$i}"];
    
    // var_dump($ans);
    // 足し算処理
    switch ($ope){
      case "+":
        echo "   {$x} + {$y} = {$ans}" ;
      if ($x+$y == $ans){
        echo "....正解 <br/>";
      }else{
        echo "....不正解。正解は{$ans_plus} <br/>";
      }
      break;
      // 引き算処理
      case "-":
        echo "   {$x} - {$y} = {$ans}" ;
      if ($x-$y == $ans){
        echo "....正解 <br/>";
      }else{
        echo "....不正解。正解は{$ans_minus} <br/>";
      }
      break;
    }
  }
?>