<?php
namespace Tests\Whizark\DesignPatterns\GoF\Creational\FactoryMethod;

use Whizark\DesignPatterns\GoF\Creational\FactoryMethod\Creator;

/**
 * Class ClientTest
 * @package Tests\Whizark\DesignPatterns\GoF\Creational\FactoryMethod
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test an use case.
     */
    public function testAnUseCase()
    {
        $creator = new Creator();
        $product = $creator->factoryMethod();
        $product->doSomething();
    }
}
