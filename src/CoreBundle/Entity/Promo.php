<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promo
 *
 * @ORM\Table(name="promo")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\PromoRepository")
 */
class Promo
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
     * @ORM\Column(name="promo", type="string", length=255)
     */
    private $promo;

    /**
     * @ORM\OneToMany(targetEntity="Personne", mappedBy="unePromo")
     */
    private $desPersonnes;


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
     * Set promo
     *
     * @param string $promo
     *
     * @return Promo
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;
    
        return $this;
    }

    /**
     * Get promo
     *
     * @return string
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set unePersonne
     *
     * @param \CoreBundle\Entity\Personne $unePersonne
     *
     * @return Promo
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
     * Constructor
     */
    public function __construct()
    {
        $this->desPersonnes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add desPersonne
     *
     * @param \CoreBundle\Entity\Personne $desPersonne
     *
     * @return Promo
     */
    public function addDesPersonne(\CoreBundle\Entity\Personne $desPersonne)
    {
        $this->desPersonnes[] = $desPersonne;
    
        return $this;
    }

    /**
     * Remove desPersonne
     *
     * @param \CoreBundle\Entity\Personne $desPersonne
     */
    public function removeDesPersonne(\CoreBundle\Entity\Personne $desPersonne)
    {
        $this->desPersonnes->removeElement($desPersonne);
    }

    /**
     * Get desPersonnes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDesPersonnes()
    {
        return $this->desPersonnes;
    }
}
