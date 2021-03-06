<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tuteur
 *
 * @ORM\Table(name="tuteur")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\TuteurRepository")
 */
class Tuteur {

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
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=255)
     */
    private $fonction;

    /**
     * @var bool
     *
     * @ORM\Column(name="present", type="boolean")
     */
    private $present;

    /**
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
     * @return Tuteur
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Tuteur
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Tuteur
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Tuteur
     */
    public function setTelephone($telephone) {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * Set fonction
     *
     * @param string $fonction
     *
     * @return Tuteur
     */
    public function setFonction($fonction) {
        $this->fonction = $fonction;

        return $this;
    }

    /**
     * Get fonction
     *
     * @return string
     */
    public function getFonction() {
        return $this->fonction;
    }

    /**
     * Set present
     *
     * @param boolean $present
     *
     * @return Tuteur
     */
    public function setPresent($present) {
        $this->present = $present;

        return $this;
    }

    /**
     * Get present
     *
     * @return boolean
     */
    public function getPresent() {
        return $this->present;
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
     * @return Tuteur
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
