<?php

namespace App\Entity;

use App\Repository\ForumsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ForumsRepository")
 */
class Forums
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createdAt;

     /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SousCategories", inversedBy="forums")
     * @ORM\JoinColumn(name="souscategories_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $souscategories;



    public function getId(): ?int {
        return $this->id;
    }

     public function setId($id) {
        $this->id = $id;

        return $this;
    }

    public function getTitle(): ?string {
        return $this->title;
    }

    public function setTitle(string $title): self {
        $this->title = $title;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self {
        $this->createdAt = $createdAt;

        return $this;
    }
 
    public function getSouscategories()
    {
        return $this->souscategories;
    }

    public function setSouscategories($souscategories)
    {
        $this->souscategories = $souscategories;

        return $this;
    }
}
