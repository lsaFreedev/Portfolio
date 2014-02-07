<?php

namespace lsa\UserBundle\Entity;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\Response;

use lsa\PortfolioBundle\Entity\Activities;
/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="lsa\UserBundle\Entity\UserRepository")
 */
class User implements AdvancedUserInterface, \Serializable {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
    * @ORM\Column(type="string", length=255, unique=true)
    */
    private $email;
    
    /**
     * @ORM\Column(name="firstname",type="string",length=50)
     *
     */
    private $firstname;

    /**
     * @ORM\Column(name="lastname",type="string",length=50)
     */
    private $lastname;

    /**
     * @ORM\Column(name="birthday",type="date")
     */
    private $birthday;

    /**
     * @ORM\Column(name="address",type="text")
     */
    private $address;

    /**
     * Association of class
     */
    /**
     * @ORM\ManyToOne(targetEntity="lsa\PortfolioBundle\Entity\City")
     * @ORM\JoinColumn(nullable=false)
     */
    private $city;

    /**
     * @ORM\OneToOne(targetEntity="lsa\PortfolioBundle\Entity\About",cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $about;

    /**
     * @ORM\OneToOne(targetEntity="lsa\PortfolioBundle\entity\Cv",cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $cv;

    /**
     * @ORM\ManyToOne(targetEntity="lsa\PortfolioBundle\Entity\Level")
     * @ORM\JoinColumn(nullable=false)
     */
    private $level;

    /**
     * @ORM\OneToOne(targetEntity="lsa\portfoliobundle\Entity\Images",cascade={"all"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $image;

    /**
     * Association of class : bidirectionnelle
     */
    /**
     * @ORM\OneToMany(targetEntity="lsa\PortfolioBundle\Entity\Activities",mappedBy="user")
     */
    private $activities;

    /**
     * @ORM\OneToMany(targetEntity="lsa\PortfolioBundle\Entity\Educations",mappedBy="user")
     */
    private $educations;

    /**
     * @ORM\OneToMany(targetEntity="lsa\PortfolioBundle\Entity\Experiences",mappedBy="user")
     */
    private $experiences;

    /**
     * @ORM\OneToMany(targetEntity="lsa\PortfolioBundle\Entity\Projects",mappedBy="user")
     */
    private $projects;

    /**
     * @ORM\OneToMany(targetEntity="lsa\PortfolioBundle\Entity\Skills",mappedBy="user")
     */
    private $skills;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $password;  
    
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string salt
     */
    protected $salt;
    
    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;
  
    /**
     * @ORM\ManyToMany(targetEntity="Role", inversedBy="users")
     *     
     * @var ArrayCollection $userRoles
     */
    protected $userRoles; 
    
    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->userRoles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->updatedAt = new \DateTime();
        $this->activities = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param \lsa\PortfolioBundle\Entity\City $city
     * @return User
     */
    public function setCity(\lsa\PortfolioBundle\Entity\City $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \lsa\PortfolioBundle\Entity\City
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set about
     *
     * @param \lsa\PortfolioBundle\Entity\About $about
     * @return User
     */
    public function setAbout(\lsa\PortfolioBundle\Entity\About $about = null)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return \lsa\PortfolioBundle\Entity\About
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set cv
     *
     * @param \lsa\PortfolioBundle\entity\Cv $cv
     * @return User
     */
    public function setCv(\lsa\PortfolioBundle\entity\Cv $cv = null)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get cv
     *
     * @return \lsa\PortfolioBundle\entity\Cv
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set level
     *
     * @param \lsa\PortfolioBundle\Entity\Level $level
     * @return User
     */
    public function setLevel(\lsa\PortfolioBundle\Entity\Level $level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return \lsa\PortfolioBundle\Entity\Level
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set image
     *
     * @param \lsa\portfoliobundle\Entity\Images $image
     * @return User
     */
    public function setImage(\lsa\portfoliobundle\Entity\Images $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \lsa\portfoliobundle\Entity\Images
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add activities
     *
     * @param \lsa\PortfolioBundle\Enity\Activities $activities
     * @return User
     */
    public function addActivity(Activities $activities )
    {
        $this->activities->add($activities);
        $activities->setUser($this);
        return $this;
    }

    /**
     * Remove activities
     *
     * @param \lsa\PortfolioBundle\Enity\Activities $activities
     */
    public function removeActivity(Activities $activities)
    {
        $this->activities->removeElement($activities);
    }

    /**
     * Get activities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivities()
    {
        return $this->activities;
    }

    /**
     * Add educations
     *
     * @param \lsa\PortfolioBundle\Entity\Educations $educations
     * @return User
     */
    public function addEducation(\lsa\PortfolioBundle\Entity\Educations $educations)
    {
        $this->educations[] = $educations;

        return $this;
    }

    /**
     * Remove educations
     *
     * @param \lsa\PortfolioBundle\Entity\Educations $educations
     */
    public function removeEducation(\lsa\PortfolioBundle\Entity\Educations $educations)
    {
        $this->educations->removeElement($educations);
    }

    /**
     * Get educations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEducations()
    {
        return $this->educations;
    }

    /**
     * Add experiences
     *
     * @param \lsa\PortfolioBundle\Entity\Experiences $experiences
     * @return User
     */
    public function addExperience(\lsa\PortfolioBundle\Entity\Experiences $experiences)
    {
        $this->experiences[] = $experiences;

        return $this;
    }

    /**
     * Remove experiences
     *
     * @param \lsa\PortfolioBundle\Entity\Experiences $experiences
     */
    public function removeExperience(\lsa\PortfolioBundle\Entity\Experiences $experiences)
    {
        $this->experiences->removeElement($experiences);
    }

    /**
     * Get experiences
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExperiences()
    {
        return $this->experiences;
    }

    /**
     * Add projects
     *
     * @param \lsa\PortfolioBundle\Entity\Projects $projects
     * @return User
     */
    public function addProject(\lsa\PortfolioBundle\Entity\Projects $projects)
    {
        $this->projects[] = $projects;

        return $this;
    }

    /**
     * Remove projects
     *
     * @param \lsa\PortfolioBundle\Entity\Projects $projects
     */
    public function removeProject(\lsa\PortfolioBundle\Entity\Projects $projects)
    {
        $this->projects->removeElement($projects);
    }

    /**
     * Get projects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Add skills
     *
     * @param \lsa\PortfolioBundle\Entity\Skills $skills
     * @return User
     */
    public function addSkill(\lsa\PortfolioBundle\Entity\Skills $skills)
    {
        $this->skills[] = $skills;

        return $this;
    }

    /**
     * Remove skills
     *
     * @param \lsa\PortfolioBundle\Entity\Skills $skills
     */
    public function removeSkill(\lsa\PortfolioBundle\Entity\Skills $skills)
    {
        $this->skills->removeElement($skills);
    }

    /**
     * Get skills
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSkills()
    {
        return $this->skills;
    }
    
    /**
     * Gets an array of roles.
     *
     * @return array An array of Role objects
     */
    public function getRoles()
    {
        return $this->getUserRoles()->toArray();
    }
     
    /**
     * Gets the user roles.
     *
     * @return ArrayCollection A Doctrine ArrayCollection
     */
    public function getUserRoles()
    {
        return $this->userRoles;
    }
 
    /*public function SetUserRoles(\lsa\UserBundle\Entity\Role $userRoles)
    {       
        $this->userRoles[] = $userRoles;

        return $this;    
    } */
    
    /**
     * Gets the user password.
     *
     * @return string The password.
     */
    public function getPassword()
    {
        return $this->password;
    }
  
    /**
     * Sets the user password.
     *
     * @param string $value The password.
     */
    public function setPassword($value)
    {
        $this->password = $value;
    }
  
    /**
     * Gets the user salt.
     *
     * @return string The salt.
     */
    public function getSalt()
    {
        return $this->salt;
    }
  
    /**
     * Sets the user salt.
     *
     * @param string $value The salt.
     */
    public function setSalt($value)
    {
        $this->salt = $value;
    }
    
    /**
     * Gets the username.
     *
     * @return string The username.
     */
    public function getUsername()
    {
        return $this->email;
    }
  
    /**
     * Sets the username.
     *
     * @param string $value The username.
     */
    public function setUsername($value)
    {
        $this->email = $value;
    }   
     
    /**
     * Erases the user credentials.
     */
    public function eraseCredentials()
    {
  
    }
 
    /**
     * Renvoie l'objet au format serialisé
     * @return string
     */
    public function serialize() {
        return \json_encode(array($this->id, $this->email, $this->password, $this->salt, $this->userRoles));
    }
 
    /**
     * Renseigne les valeurs de l'objet à partir d'une chaine serialisée
     * @param type $serialized
     */
    public function unserialize($serialized) {
        list($this->id, $this->email, $this->password, $this->salt, $this->userRoles) = \json_decode($serialized);
    }   
    
    /**
     * Add userRoles
     *
     * @param \lsa\UserBundle\Entity\Role $userRoles
     * @return User
     */
    public function addUserRole(\lsa\UserBundle\Entity\Role $userRoles)
    {
        $this->userRoles[] = $userRoles;

        return $this;
    }

    /**
     * Remove userRoles
     *
     * @param \lsa\UserBundle\Entity\Role $userRoles
     */
    public function removeUserRole(\lsa\UserBundle\Entity\Role $userRoles)
    {
        $this->userRoles->removeElement($userRoles);
    }
        
    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->isActive;
    }
    

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }


    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}
