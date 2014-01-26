<?php
namespace lsa\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="projects")
 * @ORM\Entity(repositoryClass="lsa\PortfolioBundle\Entity\ProjectsRepository")
 */
class Projects {
    
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
    * @ORM\Column(name="title",type="string")
    */
    private $title;
    
    /**
    * @ORM\Column(name="url",type="string")
    */
    private $url;
    
    /**
    * @ORM\Column(name="description",type="text")
    */
    private $description;
    
    /**
    * @ORM\Column(name="active",type="boolean",options={"default":0})
    */
    private $active;
    
    /**
     * Association of class
     */
    
    /**
     * @ORM\ManyToOne(targetEntity="lsa\UserBundle\Entity\User",inversedBy="projects")
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
     * Set title
     *
     * @param string $title
     * @return Projects
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Projects
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Projects
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
     * Set active
     *
     * @param boolean $active
     * @return Projects
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
     * @return Projects
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
