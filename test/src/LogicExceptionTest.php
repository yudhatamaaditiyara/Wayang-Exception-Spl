<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Exception\Spl;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Exception\Spl\LogicException;
use Wayang\Exception\Spl\SplExceptionInterface;

class LogicExceptionTest extends TestCase
{
  public function testMustBeClass(){
    $rc = new ReflectionClass(LogicException::class);
    $this->assertFalse($rc->isTrait());
    $this->assertFalse($rc->isInterface());
  }

  public function testMustBeSubclassOfLogicException(){
    $rc = new ReflectionClass(LogicException::class);
    $this->assertTrue($rc->isSubclassOf(\LogicException::class));
  }

  public function testMustBeImplemetsSplExceptionInterface(){
    $rc = new ReflectionClass(LogicException::class);
    $this->assertTrue($rc->implementsInterface(SplExceptionInterface::class));
  }
}