<?php
namespace lsa\PortfolioBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="Cv")
 * @ORM\Entity(repositoryClass="lsa\PortfolioBundle\Entity\CvRepository")
 */
class Cv {
    
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
    * @ORM\Column(name="title",type="string")
    */
    private $title;
    
    /**
    * @ORM\Column(name="chemin",type="string")
    */
    private $chemin;
    
     /**
     * @Assert\File(maxSize="6000000")
     */
    private $file = null;
    
    /**
    * @ORM\Column(name="active",type="boolean",options={"default":0})
    */
    private $active;
    
    public function __construct() {
        
    }

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
     * Set title
     *
     * @param string $title
     * @return Cv
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Set chemin
     *
     * @param string $chemin
     * @return Cv
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getChemin()
    {
        return $this->chemin;
    }
    

    /**
     * Set file
     *
     * @param string $file
     * @return Cv
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Cv
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
        
    /*
     * Get absolut path
     */
    public function getAbsolutePath()
    {
        return null === $this->chemin ? null : $this->getUploadRootDir().'/'.$this->chemin;
    }

    public function getWebPath()
    {
        return null === $this->chemin ? null : $this->getUploadDir().'/'.$this->chemin;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/cv';
    }
    
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()     
     */
    public function preUpload()
    { 
        if (null !== $this->file) {
            // faites ce que vous voulez pour générer un nom unique
            //$this->image = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();
            $this->chemin = $this->file->getClientOriginalName();
        }
    }
    
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload(){
        // la propriété « file » peut être vide si le champ n'est pas requis
        if (null === $this->file) {
            return;
        }

        // utilisez le nom de fichier original ici mais
        // vous devriez « l'assainir » pour au moins éviter
        // quelconques problèmes de sécurité

        // la méthode « move » prend comme arguments le répertoire cible et
        // le nom de fichier cible où le fichier doit être déplacé
        $this->file->move($this->getUploadRootDir(), $this->chemin);
       
        // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
        $this->file = null;
    }
    
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            @unlink($file);
        }
    }
    
    
    
}
