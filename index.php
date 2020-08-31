<?php
  include "inc/functions.php";
  $objCal = new MyCalculator();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form action="" method="post">
          <input type="text" name="firstNumber" value="">
          <input type="number" name="secondNumber" value="">
          <select class="" name="operator">
              <option>None</option>
              <option>Add</option>
              <option>Substract</option>
              <option>Multiply</option>
              <option>Divide</option>
              <option>modulo</option>
          </select>
          <br>
          <button type="submit" name="submit" value="submit">Calculate</button>
      </form>

      <?php
          if(isset($_POST['submit'])) {
              $firstNumber = $_POST['firstNumber'];
              $secondNumber = $_POST['secondNumber'];
              $operator = $_POST['operator'];

              switch ($operator) {
                  case "None":
                      echo "Please select an operator!";
                      break;
                  case "Add":
                      echo   $firstNumber + $secondNumber;
                      break;
                  case "Substract":
                      echo $firstNumber - $secondNumber;
                      break;
                  case "Multiply":
                      echo $firstNumber * $secondNumber;
                      break;
                  case "divide":
                      echo $firstNumber / $secondNumber;
                      break;
                  case "modulo":
                      echo $firstNumber % $secondNumber;
                      break;
                  default:
                        echo "Please enter some value";
                        break;
              }


          }


       ?>

  </body>
</html>
