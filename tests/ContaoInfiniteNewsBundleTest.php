<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Eknoes\ContaoInfiniteNewsBundle\Tests;

use Eknoes\ContaoCfaedCalendarMod\ContaoCfaedCalendarModBundle;
use PHPUnit\Framework\TestCase;

class ContaoInfiniteNewsBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoCfaedCalendarModBundle();

        $this->assertInstanceOf('Eknoes\ContaoCfaedCalendarMod\ContaoCfaedCalendarModBundle', $bundle);
    }
}
