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
 * Class BaseNutritions
 *
 * @package App\Entity
 * @ORM\MappedSuperclass()
 */
class BaseNutritions
{
    /**
     * @var float $calorie
     * @ORM\Column(name="calories", type="decimal", scale=2)
     */
    protected $calories = 0.0;

    /**
     * @var float $carbs
     * @ORM\Column(name="carbs", type="decimal", scale=2)
     */
    protected $carbs = 0.0;

    /**
     * @var float $protein
     * @ORM\Column(name="protein", type="decimal", scale=2)
     */
    protected $protein = 0.0;

    /**
     * @var float $fat
     * @ORM\Column(name="fat", type="decimal", scale=2)
     */
    protected $fat = 0.0;

    /**
     * @return float
     */
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * @param float $calories
     */
    public function setCalories($calories)
    {
        $this->calories = $calories;
    }

    /**
     * @return float
     */
    public function getCarbs()
    {
        return $this->carbs;
    }

    /**
     * @param float $carbs
     */
    public function setCarbs($carbs)
    {
        $this->carbs = $carbs;
    }

    /**
     * @return float
     */
    public function getProtein()
    {
        return $this->protein;
    }

    /**
     * @param float $protein
     */
    public function setProtein($protein)
    {
        $this->protein = $protein;
    }

    /**
     * @return float
     */
    public function getFat()
    {
        return $this->fat;
    }

    /**
     * @param float $fat
     */
    public function setFat($fat)
    {
        $this->fat = $fat;
    }
}