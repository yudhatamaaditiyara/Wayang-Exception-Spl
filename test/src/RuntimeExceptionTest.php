<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Exception\Spl;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Exception\Spl\RuntimeException;
use Wayang\Exception\Spl\SplExceptionInterface;

class RuntimeExceptionTest extends TestCase
{
  public function testMustBeClass(){
    $rc = new ReflectionClass(RuntimeException::class);
    $this->assertFalse($rc->isTrait());
    $this->assertFalse($rc->isInterface());
  }

  public function testMustBeSubclassOfRuntimeException(){
    $rc = new ReflectionClass(RuntimeException::class);
    $this->assertTrue($rc->isSubclassOf(\RuntimeException::class));
  }

  public function testMustBeImplemetsSplExceptionInterface(){
    $rc = new ReflectionClass(RuntimeException::class);
    $this->assertTrue($rc->implementsInterface(SplExceptionInterface::class));
  }
}