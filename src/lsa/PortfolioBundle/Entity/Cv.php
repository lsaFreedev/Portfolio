<?php
namespace lsa\PortfolioBundle\Entity;

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
    * @ORM\Column(name="file",type="string")
    */
    private $file;
    
    /**
    * @ORM\Column(name="active",type="boolean",options={"default":0})
    */
    private $active;
    
    public function __construct() {
        Parent::__construct();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getFile() {
        return $this->file;
    }

    public function getActive() {
        return $this->active;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setFile($file) {
        $this->file = $file;
    }

    public function setActive($active) {
        $this->active = $active;
    }


}
