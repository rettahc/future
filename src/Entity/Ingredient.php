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
 * Class Ingredient
 *
 * @package App\Entity
 * @ORM\Entity(repositoryClass="App\Repository\IngredientRepository")
 * @ORM\Table(name="ingredient")
 */
class Ingredient extends BaseNutritions
{
    /**
     * @var int $id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id()
     */
    protected $id;

    /**
     * @var string $name
     * @ORM\Column(name="`name`", type="string", length=255)
     */
    protected $name;

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
}