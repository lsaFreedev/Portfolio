<?php
namespace lsa\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
* @ORM\Table(name="educations")
* @ORM\Entity(repositoryClass="lsa\PortfolioBundle\Entity\EducationsRepository")
*/
class Educations 
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**     
     * @ORM\Column(name="school",type="string")
     */
    private $school;
    
    /**     
    * @ORM\Column(name="description",type="text")
    */
    private $description;

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
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    public function getId() {
        return $this->id;
    }

    public function getSchool() {
        return $this->school;
    }

    public function getDescription() {
        return $this->description;
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

    public function setSchool($school) {
        $this->school = $school;
    }

    public function setDescription($description) {
        $this->description = $description;
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
