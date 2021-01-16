<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Exception\Spl;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Exception\Spl\InvalidArgumentException;
use Wayang\Exception\Spl\SplExceptionInterface;

class InvalidArgumentExceptionTest extends TestCase
{
  public function testMustBeClass(){
    $rc = new ReflectionClass(InvalidArgumentException::class);
    $this->assertFalse($rc->isTrait());
    $this->assertFalse($rc->isInterface());
  }

  public function testMustBeSubclassOfInvalidArgumentException(){
    $rc = new ReflectionClass(InvalidArgumentException::class);
    $this->assertTrue($rc->isSubclassOf(\InvalidArgumentException::class));
  }

  public function testMustBeImplemetsSplExceptionInterface(){
    $rc = new ReflectionClass(InvalidArgumentException::class);
    $this->assertTrue($rc->implementsInterface(SplExceptionInterface::class));
  }
}