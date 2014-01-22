<?php
namespace lsa\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="City")
 * @ORM\Entity(repositoryClass="lsa\PortfolioBundle\Entity\CityRepository")
 */
class City {
   
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
    * @ORM\Column(name="city",type="string")
    */
    private $city;
    
    public function __construct() {
        Parent::__construct();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getCity() {
        return $this->city;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCity($city) {
        $this->city = $city;
    }


}
