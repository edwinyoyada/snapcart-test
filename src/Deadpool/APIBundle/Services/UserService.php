<?php

namespace Deadpool\APIBundle\Services;

use Deadpool\APIBundle\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;
use Symfony\Component\DependencyInjection\ContainerInterface;

class UserService
{
    private $doctrine;

    private $container;

    private $em;

    public function __construct(Doctrine $doctrine, ContainerInterface $container)
    {
        $this->doctrine = $doctrine;
        $this->container = $container;
        $this->em = $this->doctrine->getManager();
    }

    public function createUser($username, $password)
    {
        $user = $this->container->get('deadpool.user_builder')->buildUser($username, $password);
        $this->em->persist($user);
        $this->em->flush();
    }
}