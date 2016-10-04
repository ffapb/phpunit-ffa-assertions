# PHPUnit FFA Assertions

Shamelessly copied from [phpunit/phpunit-dom-assertions](https://github.com/phpunit/phpunit-dom-assertions/)

PHPUnit assertions I use in FFA:

 * `assertQueriesValid()`

Published on [packagist](https://packagist.org/packages/shadiakiki1986/phpunit-ffa-assertions)

## Requirements

The PHPUnit DOM assertions require PHP 5.3.3 or later.

## Installation

The recommended way to install the PHPUnit DOM assertions is
[through composer](http://getcomposer.org) using `composer require shadiakiki1986/phpunit-ffa-assertions`

## Usage

Extend `PHPUnit_Framework_FfaTestCase` to use the FFA assertions:

~~~php
class FfaTest extends PHPUnit_Framework_FfaTestCase
{
    public function testQueriesValid()
    {
        $this->assertQueriesValid('select a from b');
        $this->assertQueriesValid('select a from b','prefix message if fail');
    }
}
~~~

## Tests

[![Build Status](https://travis-ci.org/shadiakiki1986/phpunit-ffa-assertions.png?branch=master)](https://travis-ci.org/shadiakiki1986/phpunit-ffa-assertions)

To run the test suite, you need [composer](http://getcomposer.org).

    $ php composer.phar install
    $ vendor/bin/phpunit

