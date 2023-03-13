<!DOCTYPE html>
<html>
  <head>
    <title>Ti-84 Plus Calculator</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="calculator">
      <div class="screen">
        <div class="expression"></div>
        <div class="result"></div>
      </div>
      <div class="buttons">
        <div class="row">
          <button class="key" id="clear">Clear</button>
          <button class="key" id="sign">+/-</button>
          <button class="key" id="percent">%</button>
          <button class="key" id="divide">&divide;</button>
        </div>
        <div class="row">
          <button class="key" id="seven">7</button>
          <button class="key" id="eight">8</button>
          <button class="key" id="nine">9</button>
          <button class="key" id="multiply">&times;</button>
        </div>
        <div class="row">
          <button class="key" id="four">4</button>
          <button class="key" id="five">5</button>
          <button class="key" id="six">6</button>
          <button class="key" id="subtract">&minus;</button>
        </div>
        <div class="row">
          <button class="key" id="one">1</button>
          <button class="key" id="two">2</button>
          <button class="key" id="three">3</button>
          <button class="key" id="add">+</button>
        </div>
        <div class="row">
          <button class="key" id="zero">0</button>
          <button class="key" id="decimal">.</button>
          <button class="key" id="equals">=</button>
        </div>
      </div>
    </div>
    <!-- function to check if the submit button has been pressed. If it has, we retrieve the values of num1 and num2 from the form using the $_POST superglobal variable.  -->
    <div class="screen">
  <form method="post">
    <input type="text" name="num1" placeholder="0">
    <input type="text" name="num2" placeholder="0">
    <span class="result"><?php if(isset($result)){echo $result;} else{echo "0";} ?></span>
    <span class="sqrt"><?php if(isset($sqrt)){echo $sqrt;} else{echo "0";} ?></span>
    <button type="submit" name="submit" value="submit">=</button>
    <button type="submit" name="sqrt" value="sqrt">sqrt</button>
  </form>
</div>



   
<?php
if(isset($_POST['submit'])){
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $result = $num1 + $num2;
  $sqrt = isset($_POST['sqrt']) ? sqrt($num1) : 0;
}
?>


    <script src="script.js"></script>
  </body>
</html>
