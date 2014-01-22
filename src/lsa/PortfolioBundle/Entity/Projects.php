<?php
namespace lsa\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="projects")
 * @ORM\Entity(repositoryClass="lsa\PortfolioBundle\Entity\ProjectsRepository")
 */
class Projects {
    
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
    * @ORM\Column(name="url",type="string")
    */
    private $url;
    
    /**
    * @ORM\Column(name="description",type="text")
    */
    private $description;
    
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

    public function getUrl() {
        return $this->url;
    }

    public function getDescription() {
        return $this->description;
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

    public function setUrl($url) {
        $this->url = $url;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setActive($active) {
        $this->active = $active;
    }


}
