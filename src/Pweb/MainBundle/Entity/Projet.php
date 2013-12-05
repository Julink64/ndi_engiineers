<?php

namespace Pweb\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pweb\MainBundle\Entity\ProjetRepository")
 */
class Projet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=20)
     */
 	private $categorie;
 	
 	/**
     * @var string
     *
     * @ORM\Column(name="langage", type="string", length=20)
     */
 	private $langage;
 	
 	/**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=200)
     */
 	private $logo;
 	
 	/**
     * @var string
     *
     * @ORM\Column(name="apercu", type="string", length=200)
     */
 	private $apercu;
 	
 	/**
     * @var string
     *
     * @ORM\Column(name="fichier", type="string", length=200)
     */
 	private $fichier;
 	
 	/**
     * @var string
     *
     * @ORM\Column(name="phrase", type="text")
     */
 	private $phrase;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Produit
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Projet
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Projet
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    
    /**
     * Set langage
     *
     * @param string $langage
     * @return Projet
     */
    public function setLangage($langage)
    {
        $this->langage = $langage;
    
        return $this;
    }

    /**
     * Get langage
     *
     * @return string
     */
    public function getLangage()
    {
        return $this->langage;
    }
    
    /**
     * Set logo
     *
     * @param string $logo
     * @return Projet
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    
        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }
    
    /**
     * Set fichier
     *
     * @param string $fichier
     * @return Projet
     */
    public function setFichier($fichier)
    {
        $this->fichier = $fichier;
    
        return $this;
    }

    /**
     * Get fichier
     *
     * @return string
     */
    public function getFichier()
    {
        return $this->fichier;
    }
    
    /**
     * Set apercu
     *
     * @param string $apercu
     * @return Projet
     */
    public function setApercu($apercu)
    {
        $this->apercu = $apercu;
    
        return $this;
    }

    /**
     * Get apercu
     *
     * @return string
     */
    public function getApercu()
    {
        return $this->apercu;
    }
    
    /**
     * Set phrasePrincipale
     *
     * @param string $phrase
     * @return Projet
     */
    public function setPhrase($phrase)
    {
        $this->phrase = $phrase;
    
        return $this;
    }

    /**
     * Get phrase
     *
     * @return string
     */
    public function getPhrase()
    {
        return $this->phrase;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    }
}