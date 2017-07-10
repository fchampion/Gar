<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ContratRepository")
 */
class Contrat {

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
     * @ORM\Column(name="date_debut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date")
     */
    private $dateFin;

    /**
     * @var bool
     *
     * @ORM\Column(name="actif", type="boolean")
     */
    private $actif;

    /**
     * @ORM\ManyToOne(targetEntity="Personne", inversedBy="desContrats")
     * @ORM\JoinColumn(name="personne_id", referencedColumnName="id")
     */
    private $unePersonne;

    /**
     * @ORM\ManyToOne(targetEntity="Entreprise", inversedBy="desContrats")
     * @ORM\JoinColumn(name="entreprise_id", referencedColumnName="id")
     */
    private $uneEntreprise;

    /**
     * @ORM\OneToOne(targetEntity="CoreBundle\Entity\Tuteur", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $unTuteur;
    
    /**
     * Many Users have One Address.
     * @ORM\OneToMany(targetEntity="Probleme", mappedBy="unContrat")
     */
    private $desProblemes;

    /**
     * Many Users have One Address.
     * @ORM\OneToMany(targetEntity="Visite", mappedBy="unContrat")
     */
    private $desVisites;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Contrat
     */
    public function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Contrat
     */
    public function setDateFin($dateFin) {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin() {
        return $this->dateFin;
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     *
     * @return Contrat
     */
    public function setActif($actif) {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean
     */
    public function getActif() {
        return $this->actif;
    }

    /**
     * Set unePersonne
     *
     * @param \CoreBundle\Entity\Personne $unePersonne
     *
     * @return Contrat
     */
    public function setUnePersonne(\CoreBundle\Entity\Personne $unePersonne = null) {
        $this->unePersonne = $unePersonne;

        return $this;
    }

    /**
     * Get unePersonne
     *
     * @return \CoreBundle\Entity\Personne
     */
    public function getUnePersonne() {
        return $this->unePersonne;
    }

    /**
     * Set uneEntreprise
     *
     * @param \CoreBundle\Entity\Entreprise $uneEntreprise
     *
     * @return Contrat
     */
    public function setUneEntreprise(\CoreBundle\Entity\Entreprise $uneEntreprise = null) {
        $this->uneEntreprise = $uneEntreprise;

        return $this;
    }

    /**
     * Get uneEntreprise
     *
     * @return \CoreBundle\Entity\Entreprise
     */
    public function getUneEntreprise() {
        return $this->uneEntreprise;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->desProblemes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set unTuteur
     *
     * @param \CoreBundle\Entity\Tuteur $unTuteur
     *
     * @return Contrat
     */
    public function setUnTuteur(\CoreBundle\Entity\Tuteur $unTuteur = null)
    {
        $this->unTuteur = $unTuteur;
    
        return $this;
    }

    /**
     * Get unTuteur
     *
     * @return \CoreBundle\Entity\Tuteur
     */
    public function getUnTuteur()
    {
        return $this->unTuteur;
    }

    /**
     * Add desProbleme
     *
     * @param \CoreBundle\Entity\Probleme $desProbleme
     *
     * @return Contrat
     */
    public function addDesProbleme(\CoreBundle\Entity\Probleme $desProbleme)
    {
        $this->desProblemes[] = $desProbleme;
    
        return $this;
    }

    /**
     * Remove desProbleme
     *
     * @param \CoreBundle\Entity\Probleme $desProbleme
     */
    public function removeDesProbleme(\CoreBundle\Entity\Probleme $desProbleme)
    {
        $this->desProblemes->removeElement($desProbleme);
    }

    /**
     * Get desProblemes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDesProblemes()
    {
        return $this->desProblemes;
    }
}
