<?php
/**************************************************************************
 * Objets.php, pokemon Android
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
 * Objets
 *
 * @ORM\Table(name="pokemon_objets")
 * @ORM\Entity(repositoryClass="Pokemon\ApiBundle\Repository\ObjetsRepository")
 * @JSON\ExclusionPolicy("ALL")
 */
class Objets
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
     * @ORM\Column(name="quantite", type="integer")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("quantite")
     
     * @var integer
     */
    private $quantite;

    /**
     * @ORM\OneToOne(targetEntity="TypeObjets")
     * @ORM\JoinColumn(name="objet_id", referencedColumnName="id")
     * @JSON\Expose
     * @JSON\Groups({"api_process"})
     * @JSON\Since("1.0")
     * @JSON\SerializedName("objet")
     
     * @var TypeObjets
     */
    private $objet;


    /**
     * Set id
     *
     * @param integer id
     *
     * @return Objets
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return Objets
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
     * @return Objets
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return Objets
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set quantite
     *
     * @param integer quantite
     *
     * @return Objets
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return Objets
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
    /**
     * Set objet
     *
     * @param \Pokemon\ApiBundle\Entity\TypeObjets $objet
     *
     * @return Objets
     */
    public function setObjet(\Pokemon\ApiBundle\Entity\TypeObjets $objet = null)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return \Pokemon\ApiBundle\Entity\TypeObjets
     */
    public function getObjet()
    {
        return $this->objet;
    }
}
