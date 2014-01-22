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
    
    public function __construct(){
        Parent::__construct();
    }
    
    public function getId() {
        return $this->id;
    }

    public function getJob() {
        return $this->job;
    }

    public function getEmployer() {
        return $this->employer;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getIscurrent() {
        return $this->iscurrent;
    }

    public function getStartdate() {
        return $this->startdate;
    }

    public function getEnddate() {
        return $this->enddate;
    }

    public function getActive() {
        return $this->active;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setJob($job) {
        $this->job = $job;
    }

    public function setEmployer($employer) {
        $this->employer = $employer;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setIscurrent($iscurrent) {
        $this->iscurrent = $iscurrent;
    }

    public function setStartdate($startdate) {
        $this->startdate = $startdate;
    }

    public function setEnddate($enddate) {
        $this->enddate = $enddate;
    }

    public function setActive($active) {
        $this->active = $active;
    }


    
}

