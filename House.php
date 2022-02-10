<?php


final class House extends RealEstate
{
    private int $levelCount;

    public function __construct(string $address, float $price, float $surface, int $levelCount)
    {
        parent::__construct($address, $price, $surface);
        $this->setLevelCount($levelCount);
    }

    public function getLevelCount(): int
    {
        return $this->levelCount;
    }

    public function setLevelCount(int $levelCount): void
    {
        if ($levelCount > 0) {
            $this->levelCount = $levelCount;
        } else {
            $this->levelCount = 1;
        }
    }
}