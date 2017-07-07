<?php

namespace CoreBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\PersonneRepository")
 */
class Personne {

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
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_nais", type="date")
     */
    private $dateNais;

    /**
     * @var string
     *
     * @ORM\Column(name="excel", type="string", length=255)
     */
    private $excel;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\OneToOne(targetEntity="CoreBundle\Entity\Rendezvous", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $unRendezVous;

    /**
     * Many Users have One Address.
     * @ORM\OneToMany(targetEntity="Contrat", mappedBy="uneEntreprise")
     */
    private $desContrats;
    
    /**
     * @ORM\OneToOne(targetEntity="CoreBundle\Entity\Promo", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $unePromo;


    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Personne
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
     * @return Personne
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
     * Set mail
     *
     * @param string $mail
     *
     * @return Personne
     */
    public function setMail($mail) {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail() {
        return $this->mail;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return Personne
     */
    public function setTel($tel) {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer
     */
    public function getTel() {
        return $this->tel;
    }

    /**
     * Set dateNais
     *
     * @param \DateTime $dateNais
     *
     * @return Personne
     */
    public function setDateNais($dateNais) {
        $this->dateNais = $dateNais;

        return $this;
    }

    /**
     * Get dateNais
     *
     * @return \DateTime
     */
    public function getDateNais() {
        return $this->dateNais;
    }

    /**
     * Set excel
     *
     * @param string $excel
     *
     * @return Personne
     */
    public function setExcel($excel) {
        $this->excel = $excel;

        return $this;
    }

    /**
     * Get excel
     *
     * @return string
     */
    public function getExcel() {
        return $this->excel;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Personne
     */
    public function setStatut($statut) {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut() {
        return $this->statut;
    }

    /**
     * Set unRendezVous
     *
     * @param \CoreBundle\Entity\Rendezvous $unRendezVous
     *
     * @return Personne
     */
    public function setUnRendezVous(\CoreBundle\Entity\Rendezvous $unRendezVous = null) {
        $this->unRendezVous = $unRendezVous;

        return $this;
    }

    /**
     * Get unRendezVous
     *
     * @return \CoreBundle\Entity\Rendezvous
     */
    public function getUnRendezVous() {
        return $this->unRendezVous;
    }

    public function __construct() {
        $this->features = new ArrayCollection();
    }

    /**
     * Add desContrat
     *
     * @param \CoreBundle\Entity\Contrat $desContrat
     *
     * @return Personne
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

    /**
     * Set unePromo
     *
     * @param \CoreBundle\Entity\Promo $unePromo
     *
     * @return Personne
     */
    public function setUnePromo(\CoreBundle\Entity\Promo $unePromo = null)
    {
        $this->unePromo = $unePromo;
    
        return $this;
    }

    /**
     * Get unePromo
     *
     * @return \CoreBundle\Entity\Promo
     */
    public function getUnePromo()
    {
        return $this->unePromo;
    }
}
