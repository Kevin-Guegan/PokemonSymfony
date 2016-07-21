<?php
/**************************************************************************
 * TypeDePokemons.php, pokemon Android
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
 * TypeDePokemons
 *
 * @ORM\Table(name="pokemon_typeDePokemons")
 * @ORM\Entity(repositoryClass="Pokemon\ApiBundle\Repository\TypeDePokemonsRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class TypeDePokemons
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
     * @ORM\Column(name="nom", type="string")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("nom")
     
     * @var string
     */
    private $nom;

    /**
     * @ORM\Column(name="attaque", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("attaque")
     
     * @var integer
     */
    private $attaque;

    /**
     * @ORM\Column(name="attaque_spe", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("attaque_spe")
     
     * @var integer
     */
    private $attaque_spe;

    /**
     * @ORM\Column(name="defence", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("defence")
     
     * @var integer
     */
    private $defence;

    /**
     * @ORM\Column(name="defence_spe", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("defence_spe")
     
     * @var integer
     */
    private $defence_spe;

    /**
     * @ORM\Column(name="vitesse", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("vitesse")
     
     * @var integer
     */
    private $vitesse;

    /**
     * @ORM\Column(name="pv", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("pv")
     
     * @var integer
     */
    private $pv;

    /**
     * @ORM\ManyToOne(targetEntity="Types")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("type")
     
     * @var Types
     */
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity="TypeDePokemons")
     * @ORM\JoinTable(name="typeDePokemonstoTypeDePokemons",
     *      joinColumns={@ORM\JoinColumn(name="typeDePokemonsInternalId_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="typeDePokemon_id", referencedColumnName="id")}
     * )
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("typeDePokemon")
     
     * @var \Doctrine\Common\Collections\Collection
     */
    private $typeDePokemon;

    /**
     * @ORM\ManyToMany(targetEntity="Pokedexs")
     * @ORM\JoinTable(name="typeDePokemonstoPokedexs",
     *      joinColumns={@ORM\JoinColumn(name="typeDePokemonsInternalId_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="pokedex_id", referencedColumnName="id")}
     * )
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("pokedex")
     
     * @var \Doctrine\Common\Collections\Collection
     */
    private $pokedex;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return TypeDePokemons
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return TypeDePokemons
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set nom
     *
     * @param string nom
     *
     * @return TypeDePokemons
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return TypeDePokemons
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set attaque
     *
     * @param integer attaque
     *
     * @return TypeDePokemons
     */
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get attaque
     *
     * @return TypeDePokemons
     */
    public function getAttaque()
    {
        return $this->attaque;
    }
    /**
     * Set attaque_spe
     *
     * @param integer attaque_spe
     *
     * @return TypeDePokemons
     */
    public function setAttaque_spe($attaque_spe)
    {
        $this->attaque_spe = $attaque_spe;

        return $this;
    }

    /**
     * Get attaque_spe
     *
     * @return TypeDePokemons
     */
    public function getAttaque_spe()
    {
        return $this->attaque_spe;
    }
    /**
     * Set defence
     *
     * @param integer defence
     *
     * @return TypeDePokemons
     */
    public function setDefence($defence)
    {
        $this->defence = $defence;

        return $this;
    }

    /**
     * Get defence
     *
     * @return TypeDePokemons
     */
    public function getDefence()
    {
        return $this->defence;
    }
    /**
     * Set defence_spe
     *
     * @param integer defence_spe
     *
     * @return TypeDePokemons
     */
    public function setDefence_spe($defence_spe)
    {
        $this->defence_spe = $defence_spe;

        return $this;
    }

    /**
     * Get defence_spe
     *
     * @return TypeDePokemons
     */
    public function getDefence_spe()
    {
        return $this->defence_spe;
    }
    /**
     * Set vitesse
     *
     * @param integer vitesse
     *
     * @return TypeDePokemons
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get vitesse
     *
     * @return TypeDePokemons
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }
    /**
     * Set pv
     *
     * @param integer pv
     *
     * @return TypeDePokemons
     */
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get pv
     *
     * @return TypeDePokemons
     */
    public function getPv()
    {
        return $this->pv;
    }
    /**
     * Set type
     *
     * @param \Pokemon\ApiBundle\Entity\Types $type
     *
     * @return TypeDePokemons
     */
    public function setType(\Pokemon\ApiBundle\Entity\Types $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Pokemon\ApiBundle\Entity\Types
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Add typeDePokemon
     *
     * @param \{project_name?cap_first}\ApiBundle\Entity\TypeDePokemons $typeDePokemon
     *
     * @return TypeDePokemons
     */
    public function addTypeDePokemon(\Pokemon\ApiBundle\Entity\TypeDePokemons $typeDePokemon)
    {
        $this->typeDePokemons[] = $typeDePokemon;

        return $this;
    }

    /**
     * Remove typeDePokemon
     *
     * @param \Pokemon\ApiBundle\Entity\TypeDePokemons $typeDePokemon
     */
    public function removeTypeDePokemon(\Pokemon\ApiBundle\Entity\TypeDePokemons $typeDePokemon)
    {
        $this->typeDePokemons->removeElement($typeDePokemon);
    }

    /**
     * Get typeDePokemons
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTypeDePokemon()
    {
        return $this->typeDePokemon;
    }
    /**
     * Add pokedex
     *
     * @param \{project_name?cap_first}\ApiBundle\Entity\Pokedexs $pokedex
     *
     * @return TypeDePokemons
     */
    public function addPokedex(\Pokemon\ApiBundle\Entity\Pokedexs $pokedex)
    {
        $this->pokedexs[] = $pokedex;

        return $this;
    }

    /**
     * Remove pokedex
     *
     * @param \Pokemon\ApiBundle\Entity\Pokedexs $pokedex
     */
    public function removePokedex(\Pokemon\ApiBundle\Entity\Pokedexs $pokedex)
    {
        $this->pokedexs->removeElement($pokedex);
    }

    /**
     * Get pokedexs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPokedex()
    {
        return $this->pokedex;
    }
}
