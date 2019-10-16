<?php

echo '<link rel="stylesheet" type="text/css" href="style.css">';



if( isset($_POST["username"]) && isset($_POST["password"]))
{
  $user = $_POST["username"];
  $password = $_POST["password"];
}

  $blues = $_POST["blue"];
  $reds = $_POST["red"];
  $blacks = $_POST["black"];
  $shipping = $_POST["shipping"];



  $blueCost = $blues * 3000;
  $redCost = $reds * 1000;
  $blackCost = $blacks * 4000;


  $total = $blueCost + $blackCost + $redCost;

  if($shipping == "three")
  {
    $shipping = "Three day";
    $total = $total + 5;
    $shippingCost = 5;
  }
  else if($shipping == "overnight")
  {
    $total = $total + 50;
    $shippingCost = 50;
    $shipping = "Over night";
  }
  else {
    $shipping = "7 day";
    $shippingCost = "0.00";
  }


  echo "<h3> Welcome beloved user" .$user . " whose password is: " . $password . "</h3><br>";
  echo "<h4>Here is your receipt: </h4><br>";

  echo "<table class='table'><tr><td></td><td>Quantity</td><td>Cost Per Item</td><td>Sub Total</td></tr>";
  echo "<tr><td style = 'color:black;'>Black Expo Marker</td><td>" . $blacks .  "</td><td>$4000</td><td>$" . $blackCost . ".00</td></tr>";
  echo "<tr><td style = 'color:blue;'>Blue Expo Marker</td><td>" . $blues.  "</td><td>$3000</td><td>$" . $blueCost . ".00</td></tr>";
  echo "<tr><td style = 'color:red;'>Red Expo Marker</td><td>" . $reds .  "</td><td>$1000</td><td>$" . $redCost. ".00</td></tr>";
  echo "<tr><td>Shipping</td><td colspan='2'>" . $shipping. "</td><td>$" . $shippingCost . "</tr>";
  echo "<tr><td colspan='3'>Total Cost</td><td>$" . $total . "</td></tr></table>";
?>
