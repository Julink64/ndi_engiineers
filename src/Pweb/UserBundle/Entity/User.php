<?php

// src/Pweb/UserBundle/Entity/User.php

namespace Pweb\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="User") */
class User extends BaseUser
{
    /**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
    protected $id; 

	/**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

	/**
     * @var string
     *
     * @ORM\Column(name="codepostal", type="text")
     */
    protected $codepostal;

	/**
     * @var string
     *
     * @ORM\Column(name="ville", type="text")
     */
    protected $ville;

	/**
     * @var string
     *
     * @ORM\Column(name="ville", type="text")
     */
    protected $listemots;
}

