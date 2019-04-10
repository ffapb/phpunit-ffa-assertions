<?php
//The @expectedException, @expectedExceptionCode, @expectedExceptionMessage, and @expectedExceptionMessageRegExp annotations are deprecated. They will be removed in PHPUnit 9. Refactor your test to use expectException(), expectExceptionCode(), expectExceptionMessage(), or expectExceptionMessageRegExp() instead.


namespace FfaPhpUnit;

class FfaTestCaseTest extends FfaTestCase
{

    /**
     * @covers \PHPUnit\Framework\DOMTestCase::assertQueriesValid
     */
    public function testAssertQueriesValidOk()
    {
        $this->assertQueriesValid(array('select a from b'));
    }

    /**
     * @covers            \PHPUnit\Framework\DOMTestCase::assertQueriesValid
     */
    public function testAssertQueriesValidFail1()
    {
        $this->expectException(\PHPUnit\Framework\AssertionFailedError::class);
        $this->assertQueriesValid(array('select a from b where a &lt; 1'));
    }

    /**
     * @covers            \PHPUnit\Framework\DOMTestCase::assertQueriesValid
     */
    public function testAssertQueriesValidFail2()
    {
        $this->expectException(\PHPUnit\Framework\AssertionFailedError::class);
        $this->assertQueriesValid(array("select a from b where a=''"));
    }

    /**
     * @covers \PHPUnit\Framework\DOMTestCase::assertFileEqualsWrap
     */
    public function testAssertFileEqualsWrapOk()
    {
        $this->assertFileEqualsWrap(__DIR__.'/fixture.txt','some content');
    }

    /**
     * @covers            \PHPUnit\Framework\DOMTestCase::assertFileEqualsWrap
     */
    public function testAssertFileEqualsWrapFail()
    {
        $this->expectException(\PHPUnit\Framework\AssertionFailedError::class);
        $this->assertFileEqualsWrap(__DIR__.'/fixture.txt','some other content');
    }

}
