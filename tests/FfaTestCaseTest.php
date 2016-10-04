<?php

class PHPUnit_Framework_FfaTestCaseTest extends PHPUnit_Framework_FfaTestCase
{

    /**
     * @covers PHPUnit_Framework_DOMTestCase::assertQueriesValid
     */
    public function testAssertQueriesValidOk()
    {
        $this->assertQueriesValid(array('select a from b'));
    }

    /**
     * @covers            PHPUnit_Framework_DOMTestCase::assertQueriesValid
     * @expectedException PHPUnit_Framework_AssertionFailedError
     */
    public function testAssertQueriesValidFail()
    {
        $this->assertQueriesValid(array('select a from b where a &lt; 1'));
    }

}
