<?php

/**
 * @file
 * Tests for Matematicas.module.
 */

namespace Drupal\Matematicas\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the Matematicas module.
 */
class MatematicasTest extends WebTestBase {

  public static function getInfo() {
    return array(
      'name' => 'Matematicas functionality',
      'description' => 'Test Unit for module Matematicas.',
      'group' => 'Other',
    );
  }

  function setUp() {
    parent::setUp();
  }

  /**
   * Tests Matematicas functionality.
   */
  function testMatematicas() {
    //Check that the basic functions of module Matematicas.
    $this->assertEqual(TRUE, TRUE, 'Test Unit Generated via Console.');
  }

}
