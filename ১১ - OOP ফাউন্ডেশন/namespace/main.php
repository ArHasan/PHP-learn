<?php 
namespace Astronomy;
include "planet.php";
include "earth.php";
$planet = new Planets\Earth();
// $planet = new \Astronomy\Planets\Planet();
$planet->getName();