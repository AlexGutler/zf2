<?php
namespace AGUser\Fixture;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\Persistence\ObjectManager;

use AGUser\Entity\User;

class LoadUser extends AbstractFixture
{   
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setNome("Alex Gutler")
             ->setEmail("alex@grupolima.net.br")
             ->setPassword('00ag00')
             ->setActive(true)
        ;
        $manager->persist($user);
        $manager->flush();
    }
}
