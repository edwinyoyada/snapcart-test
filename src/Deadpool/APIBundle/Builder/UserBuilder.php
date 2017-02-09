<?php

namespace Deadpool\APIBundle\Builder;

use Deadpool\APIBundle\Entity\User;


/**
 * Created by PhpStorm.
 * User: OP-User
 * Date: 2/9/2017
 * Time: 2:37 PM
 */
class UserBuilder
{
    private $encoder;

    public function __construct($encoder)
    {
        $this->encoder = $encoder;
    }
    public function buildUser($username, $password)
    {
        $user = new User();
        $hashed = $this->encoder->encodePassword($user, $password);

        $user->setUsername($username);
        $user->setPassword($hashed);

        return $user;
    }
}