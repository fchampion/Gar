<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Personne
 *
 * @ORM\Table(name="personne")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\PersonneRepository")
 * @ORM\HasLifecycleCallbacks()
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
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;
 
    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;
 
    private $file;
 
    private $tempFilename; // pour stocker le nom du fichier temporairement

    private $uploadRootDir;
    
    function __construct() {
        $this->uploadRootDir=__DIR__.'/../../../web/'.$this->getUploadDir();
    }

    
    // GETTER ET SETTER
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

    /**
     * 
     */
    public function getNomPrenom() {
        $nomPrenom = this.getNom() + ' ' + this.getPenom();
        return $nomPrenom;
    }
    
    /**
     * Set url
     * 
     * @param string $url
     * @return Personne
     */
    public function setUrl($url)
    {
        $this->url=$url;
        return $this;
    }
    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Set alt
     *
     * @param string $alt
     * @return Personne
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
     
        return $this;
    }
 
    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }
    
    // On modifie le setter de File, pour prendre en compte l'upload d'un fichier lorsqu'il en existe déjà un autre
  public function setFile(UploadedFile $file)
  {
    $this->file = $file;
 
    // On vérifie si on avait déjà un fichier pour cette entité
    if (null !== $this->url) {
      // On sauvegarde l'extension du fichier pour le supprimer plus tard
      $this->tempFilename = $this->url;
 
      // On réinitialise les valeurs des attributs url et alt
      $this->url = null;
      $this->alt = null;
    }
  }
   public function getFile()
    {
        return $this->file;
    }

    /**
    * @ORM\PrePersist()
    * @ORM\PreUpdate()
    */
    public function preUpload()
    {
        // Si jamais il n'y a pas de fichier (champ facultatif)
        if (null === $this->file) {
          return;
        }
 
        // Le nom du fichier est son id, on doit juste stocker également son extension
        // Pour faire propre, on devrait renommer cet attribut en « extension », plutôt que « url »
        $this->url = $this->file->guessExtension();
 
        // Et on génère l'attribut alt de la balise <img>, à la valeur du nom du fichier sur le PC de l'internaute
        $this->alt = $this->file->getClientOriginalName();
    }
    /* MANIPULER LE FICHIER ENVOYE */
     /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        // Si jamais il n'y a pas de fichier (champ facultatif), on ne fait rien
        if (null === $this->file) {
          return;
        }
 
        // Si on avait un ancien fichier, on le supprime
        if (null !== $this->tempFilename)
        {
            $oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
            if (file_exists($oldFile))
            {
                unlink($oldFile);
            }
        }
 
        // On déplace le fichier envoyé dans le répertoire de notre choix
        $this->file->move(
        $this->getUploadRootDir(), // Le répertoire de destination
        $this->id.'.'.$this->url   // Le nom du fichier à créer, ici « id.extension »
        );
    }
    
    /**
    * @ORM\PreRemove()
    */
    public function preRemoveUpload()
    {
        // On sauvegarde temporairement le nom du fichier, car il dépend de l'id
        $this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
    }
 
    /**
    * @ORM\PostRemove()
    */
    public function removeUpload()
    {
        // En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
        if (file_exists($this->tempFilename)) {
      // On supprime le fichier
      unlink($this->tempFilename);
    }
  }
 
    public function getUploadDir()
    {
        // On retourne le chemin relatif vers l'image pour un navigateur (relatif au répertoire /web donc)
        return 'img/profil';
    }
 
    public function getUploadRootDir()
    {
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return $this->uploadRootDir;
    }
}
