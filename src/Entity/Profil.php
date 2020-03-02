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

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Profil
 *
 * @package App\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ProfilRepository")
 * @ORM\Table(name="profil")
 */
class Profil
{
    /**
     * @var int $id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id()
     */
    protected $id;

    /**
     * @var string $firstname
     * @ORM\Column(name="firstname", type="string", length=42)
     */
    protected $firstname = '';

    /**
     * @var string $name
     * @ORM\Column(name="`name``", type="string", length=42)
     */
    protected $name = '';

    /**
     * @var int $age
     * @ORM\Column(name="age", type="integer")
     */
    protected $age = 0;

    /**
     * @var int $height
     * @ORM\Column(name="height", type="integer")
     */
    protected $height = 0;

    /**
     * @var int $weight
     * @ORM\Column(name="weight", type="integer")
     */
    protected $weight = 0;

    /**
     * @var ArrayCollection $nutritionPlan
     * @ORM\OneToMany(targetEntity="App\Entity\NutritionPlan", mappedBy="profil")
     */
    protected $nutritionPlan;

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
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
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
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return ArrayCollection
     */
    public function getNutritionPlan()
    {
        return $this->nutritionPlan;
    }

    /**
     * @param ArrayCollection $nutritionPlan
     */
    public function setNutritionPlan($nutritionPlan)
    {
        $this->nutritionPlan = $nutritionPlan;
    }
}