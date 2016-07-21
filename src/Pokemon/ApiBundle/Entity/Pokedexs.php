<?php
/**************************************************************************
 * Pokedexs.php, pokemon Android
 *
 * Copyright 2016
 * Description : 
 * Author(s)   : Harmony
 * Licence     : 
 * Last update : Jul 21, 2016
 *
 **************************************************************************/

namespace Pokemon\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JSON;
use \DateTime;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Pokedexs
 *
 * @ORM\Table(name="pokemon_pokedexs")
 * @ORM\Entity(repositoryClass="Pokemon\ApiBundle\Repository\PokedexsRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class Pokedexs
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("id")
     
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    private $id;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return Pokedexs
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return Pokedexs
     */
    public function getId()
    {
        return $this->id;
    }
}
