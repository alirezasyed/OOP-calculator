<?php
include "inc/functions.php";

// creating new instances of the class MyCalculator
// $objCall = new MyCalculator();
// $obj = new MyCalculator();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculation</title>
  </head>
  <body>
      <form action="" method="post">
          <input type="number" name="firstNumber">
          <input type="number" name="secondNumber">
          <select class="" name="operator">
              <option>None</option>
              <option>Add</option>
              <option>Substract</option>
              <option>Multiply</option>
              <option>Divide</option>
              <option>Modulo</option>
          </select>
          <br>
          <button type="submit" name="submit" value="submit">Calculate</button>
      </form>

      <?php
          if (isset($_POST['submit'])) {
              $firstNumber = $_POST['firstNumber'];
              $secondNumber = $_POST['secondNumber'];
              $operator = $_POST['operator'];

              if ($operator === 'Add') {
                // here instead of using x, y to do the operation like in the functions, we use ($firstNumber, $secondNumber) to do the operation.
                // $objCall->add($firstNumber, $secondNumber);
                // using static method
                MyCalculator::add($firstNumber, $secondNumber);
              } elseif ($operator === 'Substract') {
                // $objCall->sub($firstNumber, $secondNumber);
                MyCalculator::sub($firstNumber, $secondNumber);
              } elseif ($operator === 'Multiply') {
                // $objCall->mul($firstNumber, $secondNumber);
                MyCalculator::mul($firstNumber, $secondNumber);
              } elseif ($operator === 'Divide') {
                // $objCall->div($firstNumber, $secondNumber);
                MyCalculator::div($firstNumber, $secondNumber);
              } elseif ($operator === 'Modulo') {
                // $objCall->mod($firstNumber, $secondNumber);
                MyCalculator::mod($firstNumber, $secondNumber);
              } else {
                echo "Please enter some value";
              }

            }

       ?>

  </body>
</html>
