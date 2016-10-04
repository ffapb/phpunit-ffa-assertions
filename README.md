# PHPUnit FFA Assertions

PHPUnit assertions I use in FFA:

 * `assertQueriesValid()`

## Requirements

The PHPUnit DOM assertions require PHP 5.3.3 or later.

## Installation

The recommended way to install the PHPUnit DOM assertions is
[through composer](http://getcomposer.org). Just create a `composer.json` file
and run the `php composer.phar install` command to install it:

~~~json
{
    "require-dev": {
        "shadiakiki1986/phpunit-ffa-assertions": "1.0.*@dev"
    }
}
~~~

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

