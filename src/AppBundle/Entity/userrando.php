<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * userrando
 *
 * @ORM\Table(name="userrando")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\userrandoRepository")
 */
class userrando
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="Nombrerando", type="integer")
     */
    private $nombrerando;

    /**
     * @var int
     *
     * @ORM\Column(name="Distanceparcourue", type="integer")
     */
    private $distanceparcourue;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return userrando
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return userrando
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nombrerando
     *
     * @param integer $nombrerando
     * @return userrando
     */
    public function setNombrerando($nombrerando)
    {
        $this->nombrerando = $nombrerando;

        return $this;
    }

    /**
     * Get nombrerando
     *
     * @return integer 
     */
    public function getNombrerando()
    {
        return $this->nombrerando;
    }

    /**
     * Set distanceparcourue
     *
     * @param integer $distanceparcourue
     * @return userrando
     */
    public function setDistanceparcourue($distanceparcourue)
    {
        $this->distanceparcourue = $distanceparcourue;

        return $this;
    }

    /**
     * Get distanceparcourue
     *
     * @return integer 
     */
    public function getDistanceparcourue()
    {
        return $this->distanceparcourue;
    }
}
