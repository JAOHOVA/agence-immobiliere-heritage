<?php

final class Flat extends RealEstate
{
    private int $floor;

    public function __construct(string $address, float $price, float $surface, int $floor)
    {
        parent::__construct($address, $price, $surface);
        $this->floor = $floor;
    }

    public function getFloor(): int
    {
        return $this->floor;
    }

    public function setFloor(int $floor): void
    {
        $this->floor = $floor;
    }
}