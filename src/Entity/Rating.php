<?php

namespace App\Entity;

use App\Repository\RatingRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=RatingRepository::class)
 * @ApiResource()
 */
class Rating
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
    private $drinkName;

    /**
     * @ORM\Column(type="integer")
     */
    private $drinkRating;

    /**
     * @ORM\Column(type="datetime")
     */
    private $drinkRatingDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $userId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDrinkName(): ?string
    {
        return $this->drinkName;
    }

    public function setDrinkName(string $drinkName): self
    {
        $this->drinkName = $drinkName;

        return $this;
    }

    public function getDrinkRating(): ?int
    {
        return $this->drinkRating;
    }

    public function setDrinkRating(int $drinkRating): self
    {
        $this->drinkRating = $drinkRating;

        return $this;
    }

    public function getDrinkRatingDate(): ?\DateTimeInterface
    {
        return $this->drinkRatingDate;
    }

    public function setDrinkRatingDate(\DateTimeInterface $drinkRatingDate): self
    {
        $this->drinkRatingDate = $drinkRatingDate;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getRatingEntry(): string
    {
        return $this->getDrinkName() . '' . $this->getDrinkRating();
    }

}
