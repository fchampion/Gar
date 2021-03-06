<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rendezvous
 *
 * @ORM\Table(name="rendezvous")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\RendezvousRepository")
 */
class Rendezvous {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var bool
     *
     * @ORM\Column(name="cv", type="boolean")
     */
    private $cv;

    /**
     * @var bool
     *
     * @ORM\Column(name="lettremotivation", type="boolean")
     */
    private $lettremotivation;

    /**
     * @var int
     *
     * @ORM\Column(name="mat_gene", type="integer")
     */
    private $matGene;

    /**
     * @var int
     *
     * @ORM\Column(name="mat_techn", type="integer")
     */
    private $matTechn;

    /**
     * @var int
     *
     * @ORM\Column(name="assiduite", type="integer")
     */
    private $assiduite;

    /**
     * @var int
     *
     * @ORM\Column(name="ouv_esprit", type="integer")
     */
    private $ouvEsprit;

    /**
     * @var int
     *
     * @ORM\Column(name="rel_confiance", type="integer")
     */
    private $relConfiance;

    /**
     * @var int
     *
     * @ORM\Column(name="con_form", type="integer")
     */
    private $conForm;

    /**
     * @var int
     *
     * @ORM\Column(name="con_apprent", type="integer")
     */
    private $conApprent;

    /**
     * @var int
     *
     * @ORM\Column(name="degres_motiv", type="integer")
     */
    private $degresMotiv;

    /**
     * @var int
     *
     * @ORM\Column(name="rech_entrep", type="integer")
     */
    private $rechEntrep;

    /**
     * @var int
     *
     * @ORM\Column(name="predispo_techn", type="integer")
     */
    private $predispoTechn;

    /**
     * @var string
     *
     * @ORM\Column(name="observ_scolaire", type="string", length=255)
     */
    private $observScolaire;

    /**
     * @var string
     *
     * @ORM\Column(name="observ_entretien", type="string", length=255)
     */
    private $observEntretien;

    /**
     * @var string
     *
     * @ORM\Column(name="conclusion", type="string", length=255)
     */
    private $conclusion;

    /**
     * @var string
     *
     * @ORM\Column(name="avis", type="string", length=255)
     */
    private $avis;

    /**
     * @var bool
     *
     * @ORM\Column(name="permis_voiture", type="boolean")
     */
    private $permisVoiture;

    /**
     * @var bool
     *
     * @ORM\Column(name="permis_moto", type="boolean")
     */
    private $permisMoto;

    /**
     * @var bool
     *
     * @ORM\Column(name="voiture", type="boolean")
     */
    private $voiture;

    /**
     * @var bool
     *
     * @ORM\Column(name="moto", type="boolean")
     */
    private $moto;

    /**
     * @var bool
     *
     * @ORM\Column(name="scooter", type="boolean")
     */
    private $scooter;
    
    /**
     * @var int
     * 
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @ORM\OneToOne(targetEntity="CoreBundle\Entity\Personne", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $unePersonne;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Rendezvous
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set cv
     *
     * @param boolean $cv
     *
     * @return Rendezvous
     */
    public function setCv($cv) {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get cv
     *
     * @return boolean
     */
    public function getCv() {
        return $this->cv;
    }

    /**
     * Set lettremotivation
     *
     * @param boolean $lettremotivation
     *
     * @return Rendezvous
     */
    public function setLettremotivation($lettremotivation) {
        $this->lettremotivation = $lettremotivation;

        return $this;
    }

    /**
     * Get lettremotivation
     *
     * @return boolean
     */
    public function getLettremotivation() {
        return $this->lettremotivation;
    }

    /**
     * Set matGene
     *
     * @param integer $matGene
     *
     * @return Rendezvous
     */
    public function setMatGene($matGene) {
        $this->matGene = $matGene;

        return $this;
    }

    /**
     * Get matGene
     *
     * @return integer
     */
    public function getMatGene() {
        return $this->matGene;
    }

    /**
     * Set matTechn
     *
     * @param integer $matTechn
     *
     * @return Rendezvous
     */
    public function setMatTechn($matTechn) {
        $this->matTechn = $matTechn;

        return $this;
    }

    /**
     * Get matTechn
     *
     * @return integer
     */
    public function getMatTechn() {
        return $this->matTechn;
    }

    /**
     * Set assiduite
     *
     * @param integer $assiduite
     *
     * @return Rendezvous
     */
    public function setAssiduite($assiduite) {
        $this->assiduite = $assiduite;

        return $this;
    }

    /**
     * Get assiduite
     *
     * @return integer
     */
    public function getAssiduite() {
        return $this->assiduite;
    }

    /**
     * Set ouvEsprit
     *
     * @param integer $ouvEsprit
     *
     * @return Rendezvous
     */
    public function setOuvEsprit($ouvEsprit) {
        $this->ouvEsprit = $ouvEsprit;

        return $this;
    }

    /**
     * Get ouvEsprit
     *
     * @return integer
     */
    public function getOuvEsprit() {
        return $this->ouvEsprit;
    }

    /**
     * Set relConfiance
     *
     * @param integer $relConfiance
     *
     * @return Rendezvous
     */
    public function setRelConfiance($relConfiance) {
        $this->relConfiance = $relConfiance;

        return $this;
    }

    /**
     * Get relConfiance
     *
     * @return integer
     */
    public function getRelConfiance() {
        return $this->relConfiance;
    }

    /**
     * Set conForm
     *
     * @param integer $conForm
     *
     * @return Rendezvous
     */
    public function setConForm($conForm) {
        $this->conForm = $conForm;

        return $this;
    }

    /**
     * Get conForm
     *
     * @return integer
     */
    public function getConForm() {
        return $this->conForm;
    }

    /**
     * Set conApprent
     *
     * @param integer $conApprent
     *
     * @return Rendezvous
     */
    public function setConApprent($conApprent) {
        $this->conApprent = $conApprent;

        return $this;
    }

    /**
     * Get conApprent
     *
     * @return integer
     */
    public function getConApprent() {
        return $this->conApprent;
    }

    /**
     * Set degresMotiv
     *
     * @param integer $degresMotiv
     *
     * @return Rendezvous
     */
    public function setDegresMotiv($degresMotiv) {
        $this->degresMotiv = $degresMotiv;

        return $this;
    }

    /**
     * Get degresMotiv
     *
     * @return integer
     */
    public function getDegresMotiv() {
        return $this->degresMotiv;
    }

    /**
     * Set rechEntrep
     *
     * @param integer $rechEntrep
     *
     * @return Rendezvous
     */
    public function setRechEntrep($rechEntrep) {
        $this->rechEntrep = $rechEntrep;

        return $this;
    }

    /**
     * Get rechEntrep
     *
     * @return integer
     */
    public function getRechEntrep() {
        return $this->rechEntrep;
    }

    /**
     * Set predispoTechn
     *
     * @param integer $predispoTechn
     *
     * @return Rendezvous
     */
    public function setPredispoTechn($predispoTechn) {
        $this->predispoTechn = $predispoTechn;

        return $this;
    }

    /**
     * Get predispoTechn
     *
     * @return integer
     */
    public function getPredispoTechn() {
        return $this->predispoTechn;
    }

    /**
     * Set observScolaire
     *
     * @param string $observScolaire
     *
     * @return Rendezvous
     */
    public function setObservScolaire($observScolaire) {
        $this->observScolaire = $observScolaire;

        return $this;
    }

    /**
     * Get observScolaire
     *
     * @return string
     */
    public function getObservScolaire() {
        return $this->observScolaire;
    }

    /**
     * Set observEntretien
     *
     * @param string $observEntretien
     *
     * @return Rendezvous
     */
    public function setObservEntretien($observEntretien) {
        $this->observEntretien = $observEntretien;

        return $this;
    }

    /**
     * Get observEntretien
     *
     * @return string
     */
    public function getObservEntretien() {
        return $this->observEntretien;
    }

    /**
     * Set conclusion
     *
     * @param string $conclusion
     *
     * @return Rendezvous
     */
    public function setConclusion($conclusion) {
        $this->conclusion = $conclusion;

        return $this;
    }

    /**
     * Get conclusion
     *
     * @return string
     */
    public function getConclusion() {
        return $this->conclusion;
    }

    /**
     * Set avis
     *
     * @param string $avis
     *
     * @return Rendezvous
     */
    public function setAvis($avis) {
        $this->avis = $avis;

        return $this;
    }

    /**
     * Get avis
     *
     * @return string
     */
    public function getAvis() {
        return $this->avis;
    }

    /**
     * Set permisVoiture
     *
     * @param boolean $permisVoiture
     *
     * @return Rendezvous
     */
    public function setPermisVoiture($permisVoiture) {
        $this->permisVoiture = $permisVoiture;

        return $this;
    }

    /**
     * Get permisVoiture
     *
     * @return boolean
     */
    public function getPermisVoiture() {
        return $this->permisVoiture;
    }

    /**
     * Set permisMoto
     *
     * @param boolean $permisMoto
     *
     * @return Rendezvous
     */
    public function setPermisMoto($permisMoto) {
        $this->permisMoto = $permisMoto;

        return $this;
    }

    /**
     * Get permisMoto
     *
     * @return boolean
     */
    public function getPermisMoto() {
        return $this->permisMoto;
    }

    /**
     * Set voiture
     *
     * @param boolean $voiture
     *
     * @return Rendezvous
     */
    public function setVoiture($voiture) {
        $this->voiture = $voiture;

        return $this;
    }

    /**
     * Get voiture
     *
     * @return boolean
     */
    public function getVoiture() {
        return $this->voiture;
    }

    /**
     * Set moto
     *
     * @param boolean $moto
     *
     * @return Rendezvous
     */
    public function setMoto($moto) {
        $this->moto = $moto;

        return $this;
    }

    /**
     * Get moto
     *
     * @return boolean
     */
    public function getMoto() {
        return $this->moto;
    }

    /**
     * Set scooter
     *
     * @param boolean $scooter
     *
     * @return Rendezvous
     */
    public function setScooter($scooter) {
        $this->scooter = $scooter;

        return $this;
    }

    /**
     * Get scooter
     *
     * @return boolean
     */
    public function getScooter() {
        return $this->scooter;
    }


    /**
     * Set unePersonne
     *
     * @param \CoreBundle\Entity\Personne $unePersonne
     *
     * @return Rendezvous
     */
    public function setUnePersonne(\CoreBundle\Entity\Personne $unePersonne = null)
    {
        $this->unePersonne = $unePersonne;
    
        return $this;
    }

    /**
     * Get unePersonne
     *
     * @return \CoreBundle\Entity\Personne
     */
    public function getUnePersonne()
    {
        return $this->unePersonne;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Rendezvous
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    
        return $this;
    }

    /**
     * Get duree
     *
     * @return integer
     */
    public function getDuree()
    {
        return $this->duree;
    }
}
