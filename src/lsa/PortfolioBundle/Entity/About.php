<?php
namespace lsa\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="About")
 * @ORM\Entity(repositoryClass="lsa\PortfolioBundle\Entity\AboutRepository")
 */
class About {
    
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
     * Set description
     *
     * @param string $description
     * @return About
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set avtive
     *
     * @param boolean $avtive
     * @return About
     */
    public function setAvtive($avtive)
    {
        $this->avtive = $avtive;

        return $this;
    }

    /**
     * Get avtive
     *
     * @return boolean 
     */
    public function getAvtive()
    {
        return $this->avtive;
    }
}
