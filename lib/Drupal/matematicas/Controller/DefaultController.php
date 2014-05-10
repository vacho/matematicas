<?php

namespace Drupal\matematicas\Controller;

use Drupal\Core\Controller\ControllerBase;

class DefaultController extends ControllerBase 
{

  /**
   * hello
   * @param  string $name
   * @return string
   */
  public function hello($name) {
    return "Hello " . $name . "!";
  }

  /**
   * suma
   * @param float $num1
   * @param float $num2
   * @return float
   */
  public function suma($num1, $num2) {
    return $num1 + $num2;
  }

  /**
   * resta
   * @param float $num1
   * @param float $num2
   * @return float
   */
  public function resta($num1, $num2) {
    return $num1 - $num2;
  }


}
