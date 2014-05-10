<?php

namespace Drupal\matematicas\Controller;

use Drupal\Core\Controller\ControllerBase;

class Matematicas extends ControllerBase
{

  /**
   * hello
   * @param  string $name
   * @return string
   */
  public function saludo($name) {
    return "Bienvenido " . $name . "!";
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

  /**
   * multiplicacion
   * @param float $num1
   * @param float $num2
   * @return float
   */
  public function multiplicacion($num1, $num2) {
    return $num1 * $num2;
  }

  /**
   * division
   * @param float $num1
   * @param float $num2
   * @return float
   */
  public function division($num1, $num2) {
    return $num1 / $num2;
  }

}
