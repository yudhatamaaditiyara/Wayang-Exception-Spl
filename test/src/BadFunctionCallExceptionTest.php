<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Exception\Spl;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Exception\Spl\BadFunctionCallException;
use Wayang\Exception\Spl\SplExceptionInterface;

class BadFunctionCallExceptionTest extends TestCase
{
  public function testMustBeClass(){
    $rc = new ReflectionClass(BadFunctionCallException::class);
    $this->assertFalse($rc->isTrait());
    $this->assertFalse($rc->isInterface());
  }

  public function testMustBeSubclassOfBadFunctionCallException(){
    $rc = new ReflectionClass(BadFunctionCallException::class);
    $this->assertTrue($rc->isSubclassOf(\BadFunctionCallException::class));
  }

  public function testMustBeImplemetsSplExceptionInterface(){
    $rc = new ReflectionClass(BadFunctionCallException::class);
    $this->assertTrue($rc->implementsInterface(SplExceptionInterface::class));
  }
}