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

}
