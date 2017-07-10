<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Probleme
 *
 * @ORM\Table(name="probleme")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\ProblemeRepository")
 */
class Probleme {

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
     * @var string
     *
     * @ORM\Column(name="motif", type="string", length=255)
     */
    private $motif;

    /**
     * @var string
     *
     * @ORM\Column(name="echange", type="string", length=255)
     */
    private $echange;

    /**
     * @ORM\OneToOne(targetEntity="CoreBundle\Entity\Contrat", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $unContrat;

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
     * @return Probleme
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
     * Set motif
     *
     * @param string $motif
     *
     * @return Probleme
     */
    public function setMotif($motif) {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string
     */
    public function getMotif() {
        return $this->motif;
    }

    /**
     * Set echange
     *
     * @param string $echange
     *
     * @return Probleme
     */
    public function setEchange($echange) {
        $this->echange = $echange;

        return $this;
    }

    /**
     * Get echange
     *
     * @return string
     */
    public function getEchange() {
        return $this->echange;
    }


    /**
     * Set unContrat
     *
     * @param \CoreBundle\Entity\Contrat $unContrat
     *
     * @return Probleme
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
}
