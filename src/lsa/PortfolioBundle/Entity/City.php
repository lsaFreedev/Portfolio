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
     * Set city
     *
     * @param string $city
     * @return City
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }
}
