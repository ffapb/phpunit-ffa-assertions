<?php

abstract class PHPUnit_Framework_FfaTestCase extends PHPUnit_Framework_TestCase
{
    /**
     * A sql query string generated using Twig does not contain escaped html
     *
     * @param array                 $queries
     * @param string                $prefix
     */
    public static function assertQueriesValid($queries,$prefix="") {
      foreach($queries as $k => $query) {
        self::assertLessThan(strlen($query),10,$prefix.": ".$k);
        self::assertNotRegExp('/&lt;/',$query,$prefix.": ".$k);
        self::assertNotRegExp('/&#039;/',$query,$prefix.": ".$k);
      }
    }

    // copied frmo https://github.com/shadiakiki1986/XSD-to-PHP/blob/master/test/Bootstrap2.php
    public static function assertFileEqualsWrap($expFn,$actual) {
      $temp = tempnam(sys_get_temp_dir(), 'Tux');
      file_put_contents($temp,$actual);
      // this hangs on large differences // self::assertFileEquals($expFn, $temp, "Check vimdiff $temp $expFn");
      $expected = file_get_contents($expFn);
      // do not use assertEquals since it would output the complete string
      // self::assertEquals($expected, $actual, "Check vimdiff $temp $expFn"); 
      self::assertTrue(trim($expected) == trim($actual), "Check vimdiff $temp '$expFn'");
    }

}
