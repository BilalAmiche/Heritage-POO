<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private $storageCapacity;
    private $cargo;
    private $energy;
    private $nbWheeks;

    public function __construct(string $color, int $nbSeats, string $energy, int $nbWheels, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->nbWheels = $nbWheels;
        $this->storageCapacity = $storageCapacity;
    }

    public function getEnergy()
        {
                return $this->energy;
        }

    public function setEnergy(string $energy): truck
        {
            if (in_array($energy, self::ALLOWED_ENERGIES)) {
                $this->energy = $energy;
            }
            return $this;
        }

    public function IsFull() 
    {
        if ($this->cargo < $this->storageCapacity) {
            return "In filling";
        } else {
            return "full";
        }
    }
}