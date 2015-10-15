<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Foo;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadFooData extends AbstractFixture
{
    public function load( ObjectManager $objectManager )
    {
        $foo = new Foo();
        $foo->setName( 'foo' );
        $objectManager->persist( $foo );
        $objectManager->flush();
        $this->setReference( 'foo', $foo );
    }
}
