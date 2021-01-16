<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Exception\Spl;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Exception\Spl\RangeException;
use Wayang\Exception\Spl\SplExceptionInterface;

class RangeExceptionTest extends TestCase
{
  public function testMustBeClass(){
    $rc = new ReflectionClass(RangeException::class);
    $this->assertFalse($rc->isTrait());
    $this->assertFalse($rc->isInterface());
  }

  public function testMustBeSubclassOfRangeException(){
    $rc = new ReflectionClass(RangeException::class);
    $this->assertTrue($rc->isSubclassOf(\RangeException::class));
  }

  public function testMustBeImplemetsSplExceptionInterface(){
    $rc = new ReflectionClass(RangeException::class);
    $this->assertTrue($rc->implementsInterface(SplExceptionInterface::class));
  }
}