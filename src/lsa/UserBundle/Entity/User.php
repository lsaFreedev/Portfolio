<?php
namespace lsa\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
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

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    public function getId() {
        return $this->id;
    }
        
    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function getBirthday() {
        return $this->birthday;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function setBirthday($birthday) {
        $this->birthday = $birthday;
    }

    public function setAddress($address) {
        $this->address = $address;
    }


}
