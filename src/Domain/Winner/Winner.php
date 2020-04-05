<?php


namespace App\Domain;

use App\Domain\Winner\Vo\WinnerDistance;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="winners")
 */
class Winner
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Embedded(class="App\Domain\Winner\Vo\WinnerDistance", columnPrefix="false")
     */
    private WinnerDistance $distance;

    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return WinnerDistance
     */
    public function getDistance(): WinnerDistance
    {
        return $this->distance;
    }

    /**
     * @param WinnerDistance $distance
     */
    public function setDistance(WinnerDistance $distance): void
    {
        $this->distance = $distance;
    }
}