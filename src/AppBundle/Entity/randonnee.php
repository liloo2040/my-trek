<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * randonnee
 *
 * @ORM\Table(name="randonnee")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\randonneeRepository")
 */
class randonnee
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
     * @ORM\Column(name="Nomrando", type="string", length=255)
     */
    private $nomrando;

    /**
     * @var string
     *
     * @ORM\Column(name="Distancerando", type="string", length=255)
     */
    private $distancerando;

    /**
     * @var int
     *
     * @ORM\Column(name="Participantsrando", type="integer")
     */
    private $participantsrando;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Tempsthéoriq", type="time")
     */
    private $tempsthéoriq;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Tempsrealise", type="time")
     */
    private $tempsrealise;


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
     * Set nomrando
     *
     * @param string $nomrando
     * @return randonnee
     */
    public function setNomrando($nomrando)
    {
        $this->nomrando = $nomrando;

        return $this;
    }

    /**
     * Get nomrando
     *
     * @return string 
     */
    public function getNomrando()
    {
        return $this->nomrando;
    }

    /**
     * Set distancerando
     *
     * @param string $distancerando
     * @return randonnee
     */
    public function setDistancerando($distancerando)
    {
        $this->distancerando = $distancerando;

        return $this;
    }

    /**
     * Get distancerando
     *
     * @return string 
     */
    public function getDistancerando()
    {
        return $this->distancerando;
    }

    /**
     * Set participantsrando
     *
     * @param integer $participantsrando
     * @return randonnee
     */
    public function setParticipantsrando($participantsrando)
    {
        $this->participantsrando = $participantsrando;

        return $this;
    }

    /**
     * Get participantsrando
     *
     * @return integer 
     */
    public function getParticipantsrando()
    {
        return $this->participantsrando;
    }

    /**
     * Set tempsthéoriq
     *
     * @param \DateTime $tempsthéoriq
     * @return randonnee
     */
    public function setTempsthéoriq($tempsthéoriq)
    {
        $this->tempsthéoriq = $tempsthéoriq;

        return $this;
    }

    /**
     * Get tempsthéoriq
     *
     * @return \DateTime 
     */
    public function getTempsthéoriq()
    {
        return $this->tempsthéoriq;
    }

    /**
     * Set tempsrealise
     *
     * @param \DateTime $tempsrealise
     * @return randonnee
     */
    public function setTempsrealise($tempsrealise)
    {
        $this->tempsrealise = $tempsrealise;

        return $this;
    }

    /**
     * Get tempsrealise
     *
     * @return \DateTime 
     */
    public function getTempsrealise()
    {
        return $this->tempsrealise;
    }
}
