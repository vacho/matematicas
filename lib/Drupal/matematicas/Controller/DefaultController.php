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
}
