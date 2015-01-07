<?php

/*
 * Artur Moczulski <artur.moczulski@gmail.com>
 */

namespace CreditCardsCom\Tests\Exercises\Exercise1;

use CreditCardsCom\Exercises\Exercise1\CreditCard;

class CreditCardTest extends \PHPUnit_Framework_TestCase
{
  public function testInheritance() {
    $cc = new CreditCard();
    $this->assertInstanceOf('\CreditCardsCom\Exercises\Exercise1\Product', $cc);
  }

  public function testApr() {
    $this->assertClassHasAttribute('apr', '\CreditCardsCom\Exercises\Exercise1\CreditCard');
  }
}
