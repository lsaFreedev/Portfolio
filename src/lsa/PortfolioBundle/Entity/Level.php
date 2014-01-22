<?php
namespace lsa\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="level")
 * @ORM\Entity(repositoryClass="lsa\PortfolioBundle\Entity\LevelRepository")
 */
class Level {
    
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**    
    * @ORM\Column(name="level",type="string")    
    */    
    private $level;
    
    /**    
    * @ORM\Column(name="active",type="boolean",options={"default":0})    
    */    
    private $active;
    
    public function __construct(){
        Parent::__construct();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getLevel() {
        return $this->level;
    }

    public function getActive() {
        return $this->active;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setLevel($level) {
        $this->level = $level;
    }

    public function setActive($active) {
        $this->active = $active;
    }


    
}

