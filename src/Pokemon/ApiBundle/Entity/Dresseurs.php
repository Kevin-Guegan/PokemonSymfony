<?php
/**************************************************************************
 * Dresseurs.php, pokemon Android
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
 * Dresseurs
 *
 * @ORM\Table(name="pokemon_dresseurs")
 * @ORM\Entity(repositoryClass="Pokemon\ApiBundle\Repository\DresseursRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class Dresseurs
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
     * @ORM\Column(name="login", type="string")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("login")
     
     * @var string
     */
    private $login;

    /**
     * @ORM\Column(name="password", type="string")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("password")
     
     * @var string
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity="Npcs", mappedBy="dresseursnpcInternal")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("npc")
     
     * @var \Doctrine\Common\Collections\Collection
     */
    private $npc;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return Dresseurs
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return Dresseurs
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
     * @return Dresseurs
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return Dresseurs
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set login
     *
     * @param string login
     *
     * @return Dresseurs
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return Dresseurs
     */
    public function getLogin()
    {
        return $this->login;
    }
    /**
     * Set password
     *
     * @param string password
     *
     * @return Dresseurs
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return Dresseurs
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Add npc
     *
     * @param \{project_name?cap_first}\ApiBundle\Entity\Npcs $npc
     *
     * @return Dresseurs
     */
    public function addNpc(\Pokemon\ApiBundle\Entity\Npcs $npc)
    {
        $this->npcs[] = $npc;

        return $this;
    }

    /**
     * Remove npc
     *
     * @param \Pokemon\ApiBundle\Entity\Npcs $npc
     */
    public function removeNpc(\Pokemon\ApiBundle\Entity\Npcs $npc)
    {
        $this->npcs->removeElement($npc);
    }

    /**
     * Get npcs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNpc()
    {
        return $this->npc;
    }
}
