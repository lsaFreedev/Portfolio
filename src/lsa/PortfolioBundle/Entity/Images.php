<?php
namespace lsa\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="images")
 * @ORM\Entity(repositoryClass="lsa\PortfolioBundle\Entity\ImagesRepository")
 */
class Images {
    
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
    * @ORM\Column(name="image",type="string")
    */
    private $image;
    
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

    public function getImage() {
        return $this->image;
    }

    public function getActive() {
        return $this->active;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setActive($active) {
        $this->active = $active;
    }


}
