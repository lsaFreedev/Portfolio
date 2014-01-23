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
    
     /**
     * Association of class
     */
    
    /**
     * @ORM\ManyToOne(targetEntity="lsa\UserBundle\Entity\User",inversedBy="activities")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
    
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
     * @return Activities
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
     * @return Activities
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

    /**
     * Set user
     *
     * @param \lsa\UserBundle\Entity\User $user
     * @return Activities
     */
    public function setUser(\lsa\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \lsa\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
