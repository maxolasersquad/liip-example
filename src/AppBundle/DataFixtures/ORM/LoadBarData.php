<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Bar;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadBarData extends AbstractFixture
{
    public function load( ObjectManager $objectManager )
    {
        $bar = new Bar();
        $bar->setName( 'bar' )
            ->setStatus( 'ready' );
        $objectManager->persist( $bar );
        $objectManager->flush();
        $this->setReference( 'bar', $bar );
    }
}
