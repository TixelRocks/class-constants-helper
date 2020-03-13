<?php

class HelperTest extends \PHPUnit\Framework\TestCase {
    /**
     * @test
     */
    public function prefixed_constants_are_filtered_correctly()
    {
        $constants = constants(TestClass::class, 'PREFIX');

        $this->assertTrue(is_array($constants));
        $this->assertEquals(3, count($constants));

        $constants = constants(TestClass::class);

        $this->assertTrue(is_array($constants));
        $this->assertEquals(5, count($constants));

        $constants = constants(TestClass::class, 'FUN');

        $this->assertTrue(is_array($constants));
        $this->assertEquals(1, count($constants));
    }
}