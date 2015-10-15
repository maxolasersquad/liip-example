<?php
namespace AppBundle\Tests\Entity;

use Liip\FunctionalTestBundle\Test\WebTestCase;

class FooTest extends WebTestCase
{
    public function setUp()
    {
        $this->loadFixtures( array( 'AppBundle\DataFixtures\ORM\LoadFooData' ) );
    }

    public function testTrue()
    {
        $this->assertTrue( true );
    }
}
