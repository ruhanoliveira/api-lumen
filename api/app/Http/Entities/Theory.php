<?php

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repositories\TheoryRepository")
 * @ORM\Table(name="theories")
 */
class Theory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
    * @ORM\ManyToOne(targetEntity="Scientist", inversedBy="theories")
    * @var Scientist
    */
    protected $scientist;

    /**
    * @param $title
    */
    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setScientist(Scientist $scientist)
    {
        $this->scientist = $scientist;
    }

    public function getScientist()
    {
        return $this->scientist;
    }
}
