<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="entreprise")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\EntrepriseRepository")
 */
class Entreprise {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=255)
     */
    private $cp;

    /**
     * Many Users have One Address.
     * @ORM\OneToMany(targetEntity="Contrat", mappedBy="uneEntreprise")
     */
    private $desContrats;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Entreprise
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Entreprise
     */
    public function setVille($ville) {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    function getAdresse() {
        return $this->adresse;
    }

    /**
     * Get cp
     *
     * @return string
     */
    function getCp() {
        return $this->cp;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Entreprise
     */
    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Entreprise
     */
    function setCp($cp) {
        $this->cp = $cp;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->desContrats = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add desContrat
     *
     * @param \CoreBundle\Entity\Contrat $desContrat
     *
     * @return Entreprise
     */
    public function addDesContrat(\CoreBundle\Entity\Contrat $desContrat)
    {
        $this->desContrats[] = $desContrat;
    
        return $this;
    }

    /**
     * Remove desContrat
     *
     * @param \CoreBundle\Entity\Contrat $desContrat
     */
    public function removeDesContrat(\CoreBundle\Entity\Contrat $desContrat)
    {
        $this->desContrats->removeElement($desContrat);
    }

    /**
     * Get desContrats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDesContrats()
    {
        return $this->desContrats;
    }
}
