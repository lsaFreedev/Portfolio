<?php
namespace lsa\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="activities")
 * @ORM\Entity(repositoryClass="lsa\PortfolioBundle\Entity\ActivitiesRepository")
 */
class Activities {
    
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
    * @ORM\Column(name="description",type="text")
    */
    private $description;
    
    /**
    * @ORM\Column(name="active",type="boolean",options={"default":0})
    */
    private $avtive;
    
    public function __construct() {
        Parent::__construct();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getAvtive() {
        return $this->avtive;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setAvtive($avtive) {
        $this->avtive = $avtive;
    }


    
}
