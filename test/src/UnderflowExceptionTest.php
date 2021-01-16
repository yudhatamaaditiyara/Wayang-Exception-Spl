<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Exception\Spl;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Exception\Spl\UnderflowException;
use Wayang\Exception\Spl\SplExceptionInterface;

class UnderflowExceptionTest extends TestCase
{
  public function testMustBeClass(){
    $rc = new ReflectionClass(UnderflowException::class);
    $this->assertFalse($rc->isTrait());
    $this->assertFalse($rc->isInterface());
  }

  public function testMustBeSubclassOfUnderflowException(){
    $rc = new ReflectionClass(UnderflowException::class);
    $this->assertTrue($rc->isSubclassOf(\UnderflowException::class));
  }

  public function testMustBeImplemetsSplExceptionInterface(){
    $rc = new ReflectionClass(UnderflowException::class);
    $this->assertTrue($rc->implementsInterface(SplExceptionInterface::class));
  }
}