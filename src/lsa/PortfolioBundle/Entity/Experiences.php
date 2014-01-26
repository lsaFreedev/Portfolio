<?php
namespace lsa\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="experiences")
 * @ORM\Entity(repositoryClass="lsa\PortfolioBundle\Entity\ExperiencesRepository")
 */
class Experiences {
    
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
    * @ORM\Column(name="job",type="string")
    */
    private $job;
    
    /**
    * @ORM\Column(name="employer",type="string")
    */    
    private $employer;
    
    /**
    * @ORM\Column(name="description",type="text")
    */     
    private $description;
    
    /**
    * @ORM\Column(name="iscurrent",type="boolean")
    */     
    private $iscurrent;
    
    /**
    * @ORM\Column(name="startdate",type="date")
    */     
    private $startdate;
    
    /**
    * @ORM\Column(name="enddate",type="date")
    */       
    private $enddate;
    
    /**
    * @ORM\Column(name="active",type="boolean",options={"default":0})
    */    
    private $active;
    
    /**
     * Association of class
     */
    
    /**
     * @ORM\ManyToOne(targetEntity="lsa\UserBundle\Entity\User",inversedBy="experiences")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
    
    public function __construct(){
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
     * Set job
     *
     * @param string $job
     * @return Experiences
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set employer
     *
     * @param string $employer
     * @return Experiences
     */
    public function setEmployer($employer)
    {
        $this->employer = $employer;

        return $this;
    }

    /**
     * Get employer
     *
     * @return string 
     */
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Experiences
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
     * Set iscurrent
     *
     * @param boolean $iscurrent
     * @return Experiences
     */
    public function setIscurrent($iscurrent)
    {
        $this->iscurrent = $iscurrent;

        return $this;
    }

    /**
     * Get iscurrent
     *
     * @return boolean 
     */
    public function getIscurrent()
    {
        return $this->iscurrent;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     * @return Experiences
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime 
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     * @return Experiences
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime 
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Experiences
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
     * @return Experiences
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
