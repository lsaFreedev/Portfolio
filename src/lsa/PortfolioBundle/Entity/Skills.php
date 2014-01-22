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
    
    public function __construct() {
        Parent::__construct();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getSkill() {
        return $this->skill;
    }

    public function getLevel() {
        return $this->level;
    }

    public function getActive() {
        return $this->active;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setSkill($skill) {
        $this->skill = $skill;
    }

    public function setLevel($level) {
        $this->level = $level;
    }

    public function setActive($active) {
        $this->active = $active;
    }


}