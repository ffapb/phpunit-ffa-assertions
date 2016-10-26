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
    public function testAssertQueriesValidFail1()
    {
        $this->assertQueriesValid(array('select a from b where a &lt; 1'));
    }

    /**
     * @covers            PHPUnit_Framework_DOMTestCase::assertQueriesValid
     * @expectedException PHPUnit_Framework_AssertionFailedError
     */
    public function testAssertQueriesValidFail2()
    {
        $this->assertQueriesValid(array("select a from b where a=''"));
    }

    /**
     * @covers PHPUnit_Framework_DOMTestCase::assertFileEqualsWrap
     */
    public function testAssertFileEqualsWrapOk()
    {
        $this->assertFileEqualsWrap(__DIR__.'/fixture.txt','some content');
    }

    /**
     * @covers            PHPUnit_Framework_DOMTestCase::assertFileEqualsWrap
     * @expectedException PHPUnit_Framework_AssertionFailedError
     */
    public function testAssertFileEqualsWrapFail()
    {
        $this->assertFileEqualsWrap(__DIR__.'/fixture.txt','some other content');
    }

}
