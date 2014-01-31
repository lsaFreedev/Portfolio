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
     * Set level
     *
     * @param string $level
     * @return Level
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return string 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Level
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
}
