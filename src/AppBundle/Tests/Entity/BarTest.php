<?php
namespace AppBundle\Tests\Entity;

use Liip\FunctionalTestBundle\Test\WebTestCase;

class BarTest extends WebTestCase
{
    public function setUp()
    {
        $this->loadFixtures( array() );
    }

    public function testTrue()
    {
        $this->assertTrue( true );
    }
}
