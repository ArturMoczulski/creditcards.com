<?php

/*
 * Artur Moczulski <artur.moczulski@gmail.com>
 */

namespace CreditCardsCom\Tests\Exercises\Exercise1;

use CreditCardsCom\Exercises\Exercise1\Product;

class ProductTest extends \PHPUnit_Framework_TestCase
{
  public function testName() {
    // the initialization of an instance is required for PHPUnit to complain about not having
    // the class loaded: weird
    new \CreditCardsCom\Exercises\Exercise1\Product();
    $this->assertClassHasAttribute('name', '\CreditCardsCom\Exercises\Exercise1\Product');
  }

  public function testDescription() {
    // the initialization of an instance is required for PHPUnit to complain about not having
    // the class loaded: weird
    new \CreditCardsCom\Exercises\Exercise1\Product();
    $this->assertClassHasAttribute('description', '\CreditCardsCom\Exercises\Exercise1\Product');
  }
}
