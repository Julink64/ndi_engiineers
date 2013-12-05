<?php
// src/Pweb/MainBundle/Entity/Visiteur.php
namespace Pweb\MainBundle\Entity; 
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pweb\MainBundle\Entity\VisteurRepository") 
 */
class Visiteur
{

/**
 * @var integer $id *
 * @ORM\Column(name="id", type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO") 
 */
private $id;

/**
 * @var string $nom
 *
 * @ORM\Column(name="nom", type="string", length=255) 
 */
private $nom;

/**
 * @var string $prenom
 *
 * @ORM\Column(name="prenom", type="string", length=255) 
 */
private $prenom;

/**
 * @var string $email
 *
 * @ORM\Column(name="email", type="string", length=255) 
 */
private $email;


/**
 * @return integer
 */
public function getId(){
	return $this->id;
}

/**
 * @param string $nom
 * @return Visiteur 
 */
public function setNom($nom)
{
	$this->nom = $nom;
	return $this; 
}

/**
 * @return string
 */
public function getNom()
{
	return $this->nom;
}

/**
 * @param string $prenom
 * @return Visiteur 
 */
public function setPrenom($prenom)
{
	$this->prenom = $prenom;
	return $this; 
}

/**
 * @return string
 */
public function getPrenom()
{
	return $this->prenom;
}

/**
 * @param string $email
 * @return Visiteur 
 */
public function setEmail($email)
{
	$this->email = $email;
	return $this; 
}

/**
 * @return string
 */
public function getEmail()
{
	return $this->email;
}

}