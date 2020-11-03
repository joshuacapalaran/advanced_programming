<html>
    <head>
        <title>Assignment #1</title>
    </head>
    <body>
      <b><p>Joshua A. Capalaran</p></b>
      <b><p>CALCULATOR</p></b>
        <form>
            <input type = "number" name = "num1" placeholder = "Input First Number" required>
            <br><br>
            <input type = "number" name = "num2" placeholder = "Input Second Number" required>
            <p>Select an operator: </p>
            <select name = "operator">
                <option>None</option>
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
            </select>
            <button type = "submit" name = "submit" value = "submit">Submit</button>
        </form>
        <p>The answer is:</p>

    <?php
       if (isset($_GET['submit'])) {
           $firstNum = $_GET['num1'];
           $secondNum = $_GET['num2'];
           $operator = $_GET['operator'];

       switch ($operator) {
           case "+":
               echo $firstNum + $secondNum;
               break;
           case "-":
               echo $firstNum - $secondNum;
               break;
           case "*":
               echo $firstNum * $secondNum;
               break;
           case "/":
               echo $firstNum / $secondNumb;
               break;
           default:
               echo "You should select an operator!";
               break;
       }
     }
    ?>
    <br>
      <b><p>FIND THE GCD</p></b>
      <form action = index.php method="post">
          <input type="number" name="gcd-num1" placeholder="Input First Number" required><br><br>
          <input type="number" name="gcd-num2" placeholder="Input Second Number" required><br><br>
          <button type="submit">Submit</button>
      </form>
      <br>
      <?php
          $gcd = 1;
          if(!empty($_POST)){
              $gcd_num1 = $_POST['gcd-num1'];
              $gcd_num2 = $_POST['gcd-num2'];
              echo "The answer is: ";
              for ($i=1; $i<=max($gcd_num1,$gcd_num2);$i++)
                  if($gcd_num1 % $i == 0 && $gcd_num2 % $i == 0)
                      $gcd = $i;
              echo $gcd;
          }
      ?>
    </body>
</html>
