<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visite
 *
 * @ORM\Table(name="visite")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\VisiteRepository")
 */
class Visite
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
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer")
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="obsTuteur", type="string", length=255)
     */
    private $obsTuteur;

    /**
     * @var string
     *
     * @ORM\Column(name="ptsAameliorer", type="string", length=255)
     */
    private $ptsAameliorer;

    /**
     * @var string
     *
     * @ORM\Column(name="obsApprenti", type="string", length=255)
     */
    private $obsApprenti;

    /**
     * @ORM\OneToOne(targetEntity="CoreBundle\Entity\Contrat", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $unContrat;

    /**
     * @var bool
     *
     * @ORM\Column(name="actif", type="boolean")
     */
    private $numVisite;


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
     * @return Visite
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
     * Set duree
     *
     * @param integer $duree
     *
     * @return Visite
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

    /**
     * Set obsTuteur
     *
     * @param string $obsTuteur
     *
     * @return Visite
     */
    public function setObsTuteur($obsTuteur)
    {
        $this->obsTuteur = $obsTuteur;
    
        return $this;
    }

    /**
     * Get obsTuteur
     *
     * @return string
     */
    public function getObsTuteur()
    {
        return $this->obsTuteur;
    }

    /**
     * Set ptsAameliorer
     *
     * @param string $ptsAameliorer
     *
     * @return Visite
     */
    public function setPtsAameliorer($ptsAameliorer)
    {
        $this->ptsAameliorer = $ptsAameliorer;
    
        return $this;
    }

    /**
     * Get ptsAameliorer
     *
     * @return string
     */
    public function getPtsAameliorer()
    {
        return $this->ptsAameliorer;
    }

    /**
     * Set obsApprenti
     *
     * @param string $obsApprenti
     *
     * @return Visite
     */
    public function setObsApprenti($obsApprenti)
    {
        $this->obsApprenti = $obsApprenti;
    
        return $this;
    }

    /**
     * Get obsApprenti
     *
     * @return string
     */
    public function getObsApprenti()
    {
        return $this->obsApprenti;
    }

    /**
     * Set unContrat
     *
     * @param \CoreBundle\Entity\Contrat $unContrat
     *
     * @return Visite
     */
    public function setUnContrat(\CoreBundle\Entity\Contrat $unContrat = null)
    {
        $this->unContrat = $unContrat;
    
        return $this;
    }

    /**
     * Get unContrat
     *
     * @return \CoreBundle\Entity\Contrat
     */
    public function getUnContrat()
    {
        return $this->unContrat;
    }

    /**
     * Set numVisite
     *
     * @param boolean $numVisite
     *
     * @return Visite
     */
    public function setNumVisite($numVisite)
    {
        $this->numVisite = $numVisite;
    
        return $this;
    }

    /**
     * Get numVisite
     *
     * @return boolean
     */
    public function getNumVisite()
    {
        return $this->numVisite;
    }
}
