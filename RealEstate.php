<?php

require_once 'Flat.php';
require_once 'House.php';

abstract class RealEstate {
    private string $address;
    private float $price;
    private float $surface;

    public function __construct(string $address, float $price, float $surface)
    {
        $this->address = $address;
        $this->price = $price;
        $this->surface = $surface;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    private function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getSurface(): float
    {
        return $this->surface;
    }

    private function setSurface(float $surface): void
    {
        $this->surface = $surface;
    }
}
