<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * agent_cargo
 *
 * @ORM\Table(name="agent_cargo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\agent_cargoRepository")
 */
class agent_cargo
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

