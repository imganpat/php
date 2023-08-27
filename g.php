<?php
  echo "Prime numbers between 1 to 50 are: <br>";
  for($n=2; $n<=50; $n++){
    $t=TRUE;
    $i=2;
    while($i<$n){
      if($n%$i==0) {
        $t=FALSE;
      }
      $i++;
    }
    if ($t==TRUE) {
      echo $n." ";
    }
  }
?>
<br>
<br>
<?php
  echo "Perfect number between 1 to 100: <br>";
  for ($n=1; $n<=100; $n++) { 
    $sum=0;
    for ($i=1; $i<$n; $i++) { 
      if($n%$i==0) 
        $sum+=$i;
    }
    if ($sum==$n) {
      echo $n."  ";
    }

  }
?>
