<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Exception\Spl;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Exception\Spl\OverflowException;
use Wayang\Exception\Spl\SplExceptionInterface;

class OverflowExceptionTest extends TestCase
{
  public function testMustBeClass(){
    $rc = new ReflectionClass(OverflowException::class);
    $this->assertFalse($rc->isTrait());
    $this->assertFalse($rc->isInterface());
  }

  public function testMustBeSubclassOfOverflowException(){
    $rc = new ReflectionClass(OverflowException::class);
    $this->assertTrue($rc->isSubclassOf(\OverflowException::class));
  }

  public function testMustBeImplemetsSplExceptionInterface(){
    $rc = new ReflectionClass(OverflowException::class);
    $this->assertTrue($rc->implementsInterface(SplExceptionInterface::class));
  }
}