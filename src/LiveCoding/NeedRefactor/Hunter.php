<?php

namespace App\LiveCoding\NeedRefactor;

class Hunter
{
    private IGun $gun;

    public function setGun(IGun $gun): void
    {
        $this->gun = $gun;
    }

    public function gunShoot(): void
    {
       $this->gun->shoot();
    }

    public function gunReload()
    {
        $this->gun->reload();
    }


}

interface IGun
{
    public function reload(): void;
    public function shoot(): void;
}

class Gun implements IGun
{
    private int $bullet = 0;
    private int $maxCapacityBullet = 2;

    public function reload(): void
    {
        $this->bullet = $this->maxCapacityBullet;
    }

    public function shoot(): void
    {
        while ($this->maxCapacityBullet > 0) {
            echo "Выстрел " . PHP_EOL;
            $this->maxCapacityBullet--;
        }
    }
}


$hunter = new Hunter();
$hunter->setGun(new Gun());

$hunter->gunReload();
$hunter->gunShoot();
$hunter->gunReload();
$hunter->gunShoot();
