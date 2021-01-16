<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Exception\Spl;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Exception\Spl\OutOfBoundsException;
use Wayang\Exception\Spl\SplExceptionInterface;

class OutOfBoundsExceptionTest extends TestCase
{
  public function testMustBeClass(){
    $rc = new ReflectionClass(OutOfBoundsException::class);
    $this->assertFalse($rc->isTrait());
    $this->assertFalse($rc->isInterface());
  }

  public function testMustBeSubclassOfOutOfBoundsException(){
    $rc = new ReflectionClass(OutOfBoundsException::class);
    $this->assertTrue($rc->isSubclassOf(\OutOfBoundsException::class));
  }

  public function testMustBeImplemetsSplExceptionInterface(){
    $rc = new ReflectionClass(OutOfBoundsException::class);
    $this->assertTrue($rc->implementsInterface(SplExceptionInterface::class));
  }
}