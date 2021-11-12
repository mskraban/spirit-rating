<?php

namespace App\Tests\unit;

use App\Entity\Rating;
use Doctrine\ORM\EntityManagerInterface;
use PHPUnit\Framework\TestCase;

class RatingFormTypeTest extends TestCase
{
    public function testSettingRatingName() {
        $rating = new Rating();
        $drinkName = "Redemption";

        $rating->setDrinkName($drinkName);
        $this->assertEquals($drinkName, $rating->getDrinkName());
    }

    public function testSettingRatingValue() {
        $rating = new Rating();
        $drinkRating = 7;

        $rating->setDrinkRating($drinkRating);
        $this->assertEquals($drinkRating, $rating->getDrinkRating());
    }

    public function testReturnRating() {
        $rating = new Rating();
        $rating->setDrinkName("Redemption");
        $rating->setDrinkRating(7);

        $drinkRatingEntry = $rating->getDrinkName() . '' . $rating->getDrinkRating();
        $this->assertSame($drinkRatingEntry, $rating->getRatingEntry());
    }

}
