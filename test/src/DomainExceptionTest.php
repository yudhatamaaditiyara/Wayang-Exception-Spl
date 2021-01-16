<?php declare(strict_types=1);
/**
 * Copyright 2019 Yudha Tama Aditiyara
 * SPDX-License-Identifier: Apache-2.0
 */
namespace WayangTest\Exception\Spl;

use ReflectionClass;
use PHPUnit\Framework\TestCase;
use Wayang\Exception\Spl\DomainException;
use Wayang\Exception\Spl\SplExceptionInterface;

class DomainExceptionTest extends TestCase
{
  public function testMustBeClass(){
    $rc = new ReflectionClass(DomainException::class);
    $this->assertFalse($rc->isTrait());
    $this->assertFalse($rc->isInterface());
  }

  public function testMustBeSubclassOfDomainException(){
    $rc = new ReflectionClass(DomainException::class);
    $this->assertTrue($rc->isSubclassOf(\DomainException::class));
  }

  public function testMustBeImplemetsSplExceptionInterface(){
    $rc = new ReflectionClass(DomainException::class);
    $this->assertTrue($rc->implementsInterface(SplExceptionInterface::class));
  }
}