<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Exception\Spl;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Exception\ExceptionInterface;
use Wayang\Exception\Spl\SplExceptionInterface;

class SplExceptionInterfaceTest extends TestCase
{
  public function testMustBeInterface(){
    $rc = new ReflectionClass(SplExceptionInterface::class);
    $this->assertTrue($rc->isInterface());
  }

  public function testMustBeSubclassOfExceptionInterface(){
    $rc = new ReflectionClass(SplExceptionInterface::class);
    $this->assertTrue($rc->isSubclassOf(ExceptionInterface::class));
  }
}