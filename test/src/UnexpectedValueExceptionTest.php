<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Exception\Spl;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Exception\Spl\UnexpectedValueException;
use Wayang\Exception\Spl\SplExceptionInterface;

class UnexpectedValueExceptionTest extends TestCase
{
  public function testMustBeClass(){
    $rc = new ReflectionClass(UnexpectedValueException::class);
    $this->assertFalse($rc->isTrait());
    $this->assertFalse($rc->isInterface());
  }

  public function testMustBeSubclassOfUnexpectedValueException(){
    $rc = new ReflectionClass(UnexpectedValueException::class);
    $this->assertTrue($rc->isSubclassOf(\UnexpectedValueException::class));
  }

  public function testMustBeImplemetsSplExceptionInterface(){
    $rc = new ReflectionClass(UnexpectedValueException::class);
    $this->assertTrue($rc->implementsInterface(SplExceptionInterface::class));
  }
}