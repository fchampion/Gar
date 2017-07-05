<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personne
 *
 * @ORM\Table(name="personne")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\PersonneRepository")
 */
class Personne
{
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
     * @var string
     *
     * @ORM\Column(name="permis", type="boolean")
     */
    private $permis;
    /**
     * @var string
     *
     * @ORM\Column(name="permis_moto", type="boolean")
     */
    private $permis_moto;

    /**
     * @var string
     *
     * @ORM\Column(name="voiture", type="boolean")
     */
    private $voiture;
    /**
     * @var string
     *
     * @ORM\Column(name="scooter", type="boolean")
     */
    private $scooter;
    /**
     * @var string
     *
     * @ORM\Column(name="moto", type="boolean")
     */
    private $moto;
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Personne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Personne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Personne
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    
        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return Personne
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return integer
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set dateNais
     *
     * @param \DateTime $dateNais
     *
     * @return Personne
     */
    public function setDateNais($dateNais)
    {
        $this->dateNais = $dateNais;
    
        return $this;
    }

    /**
     * Get dateNais
     *
     * @return \DateTime
     */
    public function getDateNais()
    {
        return $this->dateNais;
    }

    /**
     * Set excel
     *
     * @param string $excel
     *
     * @return Personne
     */
    public function setExcel($excel)
    {
        $this->excel = $excel;
    
        return $this;
    }

    /**
     * Get excel
     *
     * @return string
     */
    public function getExcel()
    {
        return $this->excel;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Personne
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }
    /**
     * Get permis_voiture
     *
     * @return string
     */
    function getPermis_voiture() {
        return $this->permis_voiture;
    }
    /**
     * Get voiture
     *
     * @return string
     */
    function getVoiture() {
        return $this->voiture;
    }
    /**
     * Set permis_voiture
     *
     * @param string $permis_voiture
     *
     * @return Personne
     */
    function setPermis_voiture($permis_voiture) {
        $this->permis_voiture = $permis_voiture;
    }
    /**
     * Set voiture
     *
     * @param string $voiture
     *
     * @return Personne
     */
    function setVoiture($voiture) {
        $this->voiture = $voiture;
    }
    /**
     * Get permis_moto
     *
     * @return string
     */
    function getPermis_moto() {
        return $this->permis_moto;
    }
    /**
     * Get scooter
     *
     * @return string
     */
    function getScooter() {
        return $this->scooter;
    }
    /**
     * Get moto
     *
     * @return string
     */
    function getMoto() {
        return $this->moto;
    }
    /**
     * Set permis_moto
     *
     * @param string $permis_moto
     *
     * @return Personne
     */
    function setPermis_moto($permis_moto) {
        $this->permis_moto = $permis_moto;
    }
    /**
     * Set scooter
     *
     * @param string $scooter
     *
     * @return Personne
     */
    function setScooter($scooter) {
        $this->scooter = $scooter;
    }
    /**
     * Set moto
     *
     * @param string $moto
     *
     * @return Personne
     */
    function setMoto($moto) {
        $this->moto = $moto;
    }




}

