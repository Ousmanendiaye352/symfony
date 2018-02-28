<?php

namespace SNT\SoultanaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeBien.
 *
 * @ORM\Table(name="TypeBien")
 * @ORM\Entity(repositoryClass="SNT\SoultanaBundle\Repository\TypeBienRepository")
 */
class TypeBien
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTypeBien", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomTypeBien", type="string", length=50, unique=true)
     */
    private $nomTypeBien;

    /**
     * Get idTypeBien.
     *
     * @return int
     */
    public function getIdTypeBien()
    {
        return $this->idTypeBien;
    }

    /**
     * Set nomTypeBien.
     *
     * @param string $nomTypeBien
     *
     * @return TypeBien
     */
    public function setNomType($nomTypeBien)
    {
        $this->nomTypeBien = $nomTypeBien;

        return $this;
    }

    /**
     * Get nomTypeBien.
     *
     * @return string
     */
    public function getNomTypeBien()
    {
        return $this->nomTypeBien;
    }

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
     * Set nomTypeBien
     *
     * @param string $nomTypeBien
     *
     * @return TypeBien
     */
    public function setNomTypeBien($nomTypeBien)
    {
        $this->nomTypeBien = $nomTypeBien;

        return $this;
    }
}
