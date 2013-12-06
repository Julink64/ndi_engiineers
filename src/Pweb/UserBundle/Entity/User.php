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
 * @var string $listemots
 *
 * @ORM\Column(name="listemots", type="string", length=255) 

 */
private $listemots;

/**
 * @var string $adresse
 *
 * @ORM\Column(name="adresse", type="string", length=255) 
 */
private $adresse;

/**
 * @var integer $adresse
 *
 * @ORM\Column(name="points", type="integer", length=255) 
 */
private $points;


/**
 * @param string $text
 * @return User
 */
public function setListemots($text)
{
	$this->listemots = $text;
	return $this; 
}

/**
 * @return string
 */
public function getListemots()
{
	return $this->listemots;
}

/**
 * @param string $text
 * @return User
 */
public function setAdresse($text)
{
	$this->adresse = $text;
	return $this; 
}

/**
 * @return string
 */
public function getAdresse()
{
	return $this->adresse;
}

/**
 * @param integer $num
 * @return User
 */
public function setPoints($num)
{
	$this->points= $num;
	return $this; 
}

/**
 * @return integer
 */
public function getPoints()
{
	return $this->points;
}
}

