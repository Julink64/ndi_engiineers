<?php
// src/Pweb/MainBundle/Entity/Image.php
namespace Pweb\MainBundle\Entity; 
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pweb\MainBundle\Entity\ImageRepository") 
 */
class Image
{

/**
 * @var integer $id *
 * @ORM\Column(name="id", type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO") 
 */
private $id;

/**
 * @ORM\ManyToOne(targetEntity="Pweb\MainBundle\Entity\Projet") 
 */
private $projet;

/**
 * @var string $url
 *
 * @ORM\Column(name="url", type="string", length=255) 
 */
private $url;

/**
 * @var string $alt
 *
 * @ORM\Column(name="alt", type="string", length=255) 
 */
private $alt;

/**
 * @var string $commentaire
 *
 * @ORM\Column(name="commentaire", type="string", length=255) 
 */
private $commentaire;

/**
 * @return integer
 */
public function getId(){
	return $this->id;
}

/**
 * @param string $url
 * @return Image 
 */
public function setUrl($url)
{
	$this->url = $url;
	return $this; 
}

/**
 * @return string
 */
public function getUrl()
{
	return $this->url;
}

/**
 * @return string
 */
public function getAlt()
{
	return $this->alt;
}

/**
 * @param string $alt
 * @return Image 
 */
public function setAlt($alt)
{
	$this->alt = $alt;
	return $this; 
}

/**
 * @param string $commentaire
 * @return Image 
 */
public function setCommentaire($commentaire)
{
	$this->commentaire = $commentaire;
	return $this; 
}

/**
 * @return string
 */
public function getCommentaire()
{
	return $this->commentaire;
}

/**
 * Set projet
 * @param Pweb\MainBundle\Entity\Projet 
 * $projet
 */
public function setProjet(\Pweb\MainBundle\Entity\Projet $projet)
{
	$this->projet = $projet; 
}

/**
 * Get projet
 *
 * @return Pweb\MainBundle\Entity\Projet  
 */
public function getProjet()
{
	return $this->projet; 
}

}