<?php
namespace lsa\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="skills")
 * @ORM\Entity(repositoryClass="lsa\PortfolioBundle\Entity\SkillsRepository")
 */
class Skills {
    
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
    * @ORM\Column(name="skill",type="string")
    */
    private $skill;
    
    /**
    * @ORM\Column(name="level",type="integer")
    */
    private $level;
    
    /**
    * @ORM\Column(name="active",type="boolean",options={"default":0})
    */
    private $active;
    
    /**
     * Association of class
     */
    
    /**
     * @ORM\ManyToOne(targetEntity="lsa\UserBundle\Entity\User",inversedBy="skills")
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
     * Set skill
     *
     * @param string $skill
     * @return Skills
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill
     *
     * @return string 
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return Skills
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Skills
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

    /**
     * Set user
     *
     * @param \lsa\UserBundle\Entity\User $user
     * @return Skills
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
