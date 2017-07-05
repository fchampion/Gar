<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rdv
 *
 * @ORM\Table(name="rdv")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\RdvRepository")
 */
class Rdv
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_deb", type="time")
     */
    private $heureDeb;

    /**
     * @var bool
     *
     * @ORM\Column(name="cv", type="boolean", nullable=true)
     */
    private $cv;

    /**
     * @var bool
     *
     * @ORM\Column(name="lm", type="boolean", nullable=true)
     */
    private $lm;

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
     * @ORM\Column(name="conslusion", type="string", length=255)
     */
    private $conslusion;

    /**
     * @var string
     *
     * @ORM\Column(name="avis", type="string", length=255)
     */
    private $avis;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Rdv
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heureDeb
     *
     * @param \DateTime $heureDeb
     *
     * @return Rdv
     */
    public function setHeureDeb($heureDeb)
    {
        $this->heureDeb = $heureDeb;
    
        return $this;
    }

    /**
     * Get heureDeb
     *
     * @return \DateTime
     */
    public function getHeureDeb()
    {
        return $this->heureDeb;
    }

    /**
     * Set cv
     *
     * @param boolean $cv
     *
     * @return Rdv
     */
    public function setCv($cv)
    {
        $this->cv = $cv;
    
        return $this;
    }

    /**
     * Get cv
     *
     * @return boolean
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set lm
     *
     * @param boolean $lm
     *
     * @return Rdv
     */
    public function setLm($lm)
    {
        $this->lm = $lm;
    
        return $this;
    }

    /**
     * Get lm
     *
     * @return boolean
     */
    public function getLm()
    {
        return $this->lm;
    }

    /**
     * Set matGene
     *
     * @param integer $matGene
     *
     * @return Rdv
     */
    public function setMatGene($matGene)
    {
        $this->matGene = $matGene;
    
        return $this;
    }

    /**
     * Get matGene
     *
     * @return integer
     */
    public function getMatGene()
    {
        return $this->matGene;
    }

    /**
     * Set matTechn
     *
     * @param integer $matTechn
     *
     * @return Rdv
     */
    public function setMatTechn($matTechn)
    {
        $this->matTechn = $matTechn;
    
        return $this;
    }

    /**
     * Get matTechn
     *
     * @return integer
     */
    public function getMatTechn()
    {
        return $this->matTechn;
    }

    /**
     * Set assiduite
     *
     * @param integer $assiduite
     *
     * @return Rdv
     */
    public function setAssiduite($assiduite)
    {
        $this->assiduite = $assiduite;
    
        return $this;
    }

    /**
     * Get assiduite
     *
     * @return integer
     */
    public function getAssiduite()
    {
        return $this->assiduite;
    }

    /**
     * Set ouvEsprit
     *
     * @param integer $ouvEsprit
     *
     * @return Rdv
     */
    public function setOuvEsprit($ouvEsprit)
    {
        $this->ouvEsprit = $ouvEsprit;
    
        return $this;
    }

    /**
     * Get ouvEsprit
     *
     * @return integer
     */
    public function getOuvEsprit()
    {
        return $this->ouvEsprit;
    }

    /**
     * Set relConfiance
     *
     * @param integer $relConfiance
     *
     * @return Rdv
     */
    public function setRelConfiance($relConfiance)
    {
        $this->relConfiance = $relConfiance;
    
        return $this;
    }

    /**
     * Get relConfiance
     *
     * @return integer
     */
    public function getRelConfiance()
    {
        return $this->relConfiance;
    }

    /**
     * Set conForm
     *
     * @param integer $conForm
     *
     * @return Rdv
     */
    public function setConForm($conForm)
    {
        $this->conForm = $conForm;
    
        return $this;
    }

    /**
     * Get conForm
     *
     * @return integer
     */
    public function getConForm()
    {
        return $this->conForm;
    }

    /**
     * Set conApprent
     *
     * @param integer $conApprent
     *
     * @return Rdv
     */
    public function setConApprent($conApprent)
    {
        $this->conApprent = $conApprent;
    
        return $this;
    }

    /**
     * Get conApprent
     *
     * @return integer
     */
    public function getConApprent()
    {
        return $this->conApprent;
    }

    /**
     * Set degresMotiv
     *
     * @param integer $degresMotiv
     *
     * @return Rdv
     */
    public function setDegresMotiv($degresMotiv)
    {
        $this->degresMotiv = $degresMotiv;
    
        return $this;
    }

    /**
     * Get degresMotiv
     *
     * @return integer
     */
    public function getDegresMotiv()
    {
        return $this->degresMotiv;
    }

    /**
     * Set rechEntrep
     *
     * @param integer $rechEntrep
     *
     * @return Rdv
     */
    public function setRechEntrep($rechEntrep)
    {
        $this->rechEntrep = $rechEntrep;
    
        return $this;
    }

    /**
     * Get rechEntrep
     *
     * @return integer
     */
    public function getRechEntrep()
    {
        return $this->rechEntrep;
    }

    /**
     * Set predispoTechn
     *
     * @param integer $predispoTechn
     *
     * @return Rdv
     */
    public function setPredispoTechn($predispoTechn)
    {
        $this->predispoTechn = $predispoTechn;
    
        return $this;
    }

    /**
     * Get predispoTechn
     *
     * @return integer
     */
    public function getPredispoTechn()
    {
        return $this->predispoTechn;
    }

    /**
     * Set observScolaire
     *
     * @param string $observScolaire
     *
     * @return Rdv
     */
    public function setObservScolaire($observScolaire)
    {
        $this->observScolaire = $observScolaire;
    
        return $this;
    }

    /**
     * Get observScolaire
     *
     * @return string
     */
    public function getObservScolaire()
    {
        return $this->observScolaire;
    }

    /**
     * Set observEntretien
     *
     * @param string $observEntretien
     *
     * @return Rdv
     */
    public function setObservEntretien($observEntretien)
    {
        $this->observEntretien = $observEntretien;
    
        return $this;
    }

    /**
     * Get observEntretien
     *
     * @return string
     */
    public function getObservEntretien()
    {
        return $this->observEntretien;
    }

    /**
     * Set conslusion
     *
     * @param string $conslusion
     *
     * @return Rdv
     */
    public function setConslusion($conslusion)
    {
        $this->conslusion = $conslusion;
    
        return $this;
    }

    /**
     * Get conslusion
     *
     * @return string
     */
    public function getConslusion()
    {
        return $this->conslusion;
    }

    /**
     * Set avis
     *
     * @param string $avis
     *
     * @return Rdv
     */
    public function setAvis($avis)
    {
        $this->avis = $avis;
    
        return $this;
    }

    /**
     * Get avis
     *
     * @return string
     */
    public function getAvis()
    {
        return $this->avis;
    }
}

