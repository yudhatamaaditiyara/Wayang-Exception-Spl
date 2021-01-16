<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Exception\Spl;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Exception\Spl\BadMethodCallException;
use Wayang\Exception\Spl\SplExceptionInterface;

class BadMethodCallExceptionTest extends TestCase
{
  public function testMustBeClass(){
    $rc = new ReflectionClass(BadMethodCallException::class);
    $this->assertFalse($rc->isTrait());
    $this->assertFalse($rc->isInterface());
  }

  public function testMustBeSubclassOfBadMethodCallException(){
    $rc = new ReflectionClass(BadMethodCallException::class);
    $this->assertTrue($rc->isSubclassOf(\BadMethodCallException::class));
  }

  public function testMustBeImplemetsSplExceptionInterface(){
    $rc = new ReflectionClass(BadMethodCallException::class);
    $this->assertTrue($rc->implementsInterface(SplExceptionInterface::class));
  }
}