<?php
namespace Tests\Whizark\DesignPatterns\GoF\Structural\Decorator;

use Whizark\DesignPatterns\GoF\Structural\Decorator\ConcreteDecoratorB;

/**
 * Class ConcreteDecoratorBTest
 * @package Tests\Whizark\DesignPatterns\GoF\Structural\Decorator
 */
class ConcreteDecoratorBTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Clean up object(s).
     */
    public function tearDown()
    {
        \Mockery::close();
    }

    /**
     * Test doSomething().
     */
    public function testDoSomething()
    {
        $mockedComponent = \Mockery::mock('Whizark\DesignPatterns\GoF\Structural\Decorator\ComponentInterface');
        $mockedComponent->shouldReceive('doSomething')
                        ->once();

        $decorator = new ConcreteDecoratorB($mockedComponent);
        $decorator->doSomething();
    }
}
