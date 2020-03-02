<?php
/**
 * FBonline
 *
 * @copyright 2014-2017 Fastbolt Schraubengroßhandels GmbH (http://www.fastbolt.com)
 * @license   commercial
 * @link      https://fbonline.fastbolt.com
 * @package   App\Entity
 */


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Class NutritionPlan
 *
 * @package App\Entity
 * @ORM\Entity(repositoryClass="App\Repository\NutritionPlanRepository")
 * @ORM\Table(name="nutrion_plan")
 */
class NutritionPlan extends BaseNutritions
{
    /**
     * @var int $id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id()
     */
    protected $id;

    /**
     * @var Profil $profil
     * @ORM\ManyToOne(targetEntity="App\Entity\Profil", inversedBy="nutritionPlan")
     * @ORM\JoinColumn(name="fk_profil_id", referencedColumnName="id")
     */
    protected $profil;

    /**
     * @var string $name
     * @ORM\Column(name="`name`", type="string", length=255)
     */
    protected $name = '';

    /**
     * @var \DateTime $created
     * @ORM\Column(name="`created`", type="datetime")
     */
    protected $created;

    /**
     * @var int $trainingDays
     * @ORM\Column(name="training_days", type="integer")
     */
    protected $trainingDays = 0;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return int
     */
    public function getTrainingDays()
    {
        return $this->trainingDays;
    }

    /**
     * @param int $trainingDays
     */
    public function setTrainingDays($trainingDays)
    {
        $this->trainingDays = $trainingDays;
    }

    /**
     * @return Profil
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * @param Profil $profil
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;
    }
}