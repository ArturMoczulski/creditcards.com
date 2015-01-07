<?php

/*
 * Artur Moczulski <artur.moczulski@gmail.com>
 */

namespace CreditCardsCom\Tests\Exercises\Exercise2;

use CreditCardsCom\Exercises\Exercise2\findDuplicates;

class FindDuplicatesTest extends \PHPUnit_Framework_TestCase
{
  /**
   * @dataProvider providerFindDuplicates
   */
  public function testFindDuplicates($expected) {
    require_once __DIR__ . '/../../../src/CreditCardsCom/Exercises/Exercise2/FindDuplicates.php';
    $this->assertEquals($expected, findDuplicates($myArray));
  }

  public function providerFindDuplicates() {
    return array(
      array(
        array(
          array(5,1,9)
        )
      )
    );
  }
}
