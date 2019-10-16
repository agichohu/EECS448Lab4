<?php

  error_reporting(E_ALL);
  ini_set("display_errors", 1);


  $count =0;
  echo "Who was the first runner to run a marathon in under 2 hours <br>";
  echo "Your answer: " . $_POST["first"] . "<br>";
  echo "Correct answer: Eliud Kipchoge <br>";
  echo"<br>";
  if( $_POST["first"] == "Eliud Kipchoge")
  {
      $count++;
  }

  echo "How much of the ocean remains unexplored<br>";
  echo "Your answer: " . $_POST["second"] . "<br>";
  echo "Correct answer: 95% <br>";
  echo"<br>";
  if( $_POST["second"] == "95%")
  {
      $count++;
  }

  echo "What is George Orwell's legal name<br>";
  echo "Your answer: " . $_POST["third"] . "<br>";
  echo "Correct answer: Eric Blair <br>";
  echo"<br>";
  if( $_POST["third"] == "Eric Blair")
  {
      $count++;
  }


  echo "What is the most venomous snake in the world<br>";
  echo "Your answer: " . $_POST["fourth"] . "<br>";
  echo "Correct answer: Inland Taipan <br>";
  echo"<br>";
  if( $_POST["fourth"] == "Inland Taipan")
  {
      $count++;
  }

  echo "Who was the first woman on the Supreme Court of the United states<br>";
  echo "Your answer: " . $_POST["fifth"] . "<br>";
  echo "Correct answer: Susan Day O'Connor <br>";

  echo"<br>";
  if( $_POST["fifth"] == "Susan Day O'Connor")
  {
      $count++;
  }

  $percentage = ($count/5)*100;

  echo "you got " . $count . " correct <br>";
  echo "you got a " . $percentage . "%";

?>
