<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>php with html</title>
    <style>
      *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      h1{
        text-align: center;
        color: white;
        padding-block: 3rem;
        font-size: 2.5rem;
      }
      h3{
        color: white;
        font-size: 2rem;
        margin-top: 2rem;
        poi
      }
      body{
        height: 100vh;
        width: 100vw;
        overflow: hidden;
        background-color: #110326e8;
        cursor: default;
      }
      .conatiner{
        height: 300px;
        width: 500px;
        background-color: #e0c4ff50;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        gap: 2.5rem;
        margin: auto;
        border-radius: 16px;
        box-shadow: 0 3px 17px 695684;
      }
      .result{
        height: 200px;
        width: 100%;
        display: flex;
      }
      .old,
      .new{
        height: 70%;
        width: 50%;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content:  center;
        gap: 1rem;
        color: white;
        font-size: 25px;
      }
    </style>
  </head>
  <body>
    <h1>PHP lab assignment program</h1>
    <div class="conatiner">
      <h3>Program no: A 2</h3>
      <div class="result">
        <div class="old">
          <h4>Before</h4>
          <?php
            $number1 = 45;
            $number2 = 2;
            echo  "Number 1: $number1";
            echo "<br>";
            echo "Number 2: ".$number2;
          ?>
        </div>
        <div class="new">
          <h4>After</h4>
          <?php  
            $number1=$number1+$number2;
            $number2=$number1-$number2;
            $number1=$number1-$number2;
            echo "Number 1: ".$number1;
            echo "<br>";
            echo "Number 2: ".$number2;
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
