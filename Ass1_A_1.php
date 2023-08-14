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
      }
      body{
        height: 100vh;
        width: 100vw;
        overflow: hidden;
        background-color: #1b0045e8;
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
        color: white;
        font-size: 40px
      }
    </style>
  </head>
  <body>
    <h1>PHP lab assignment program</h1>
    <div class="conatiner">
      <h3>Program no: A 1</h3>
        <?php
          $number1 = 45;
          $number2 = 2;
          echo "Quotent: ".$number1 / $number2;
          echo "<br>";
          echo "Remainder: ".$number1 % $number2;
        ?>
    </div>
  </body>
</html>
