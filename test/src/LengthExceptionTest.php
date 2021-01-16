<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Exception\Spl;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Exception\Spl\LengthException;
use Wayang\Exception\Spl\SplExceptionInterface;

class LengthExceptionTest extends TestCase
{
  public function testMustBeClass(){
    $rc = new ReflectionClass(LengthException::class);
    $this->assertFalse($rc->isTrait());
    $this->assertFalse($rc->isInterface());
  }

  public function testMustBeSubclassOfLengthException(){
    $rc = new ReflectionClass(LengthException::class);
    $this->assertTrue($rc->isSubclassOf(\LengthException::class));
  }

  public function testMustBeImplemetsSplExceptionInterface(){
    $rc = new ReflectionClass(LengthException::class);
    $this->assertTrue($rc->implementsInterface(SplExceptionInterface::class));
  }
}