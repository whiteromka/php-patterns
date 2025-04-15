<?php

namespace App\LiveCoding\NeedRefactor;

class BadHunter
{
    public $g;

    private function setGan($gun)
    {
        $this->g = $gun;
    }

    public function __construct()
    {
        $this->g = new Gun();
    }

    public function gunShoot()
    {
        echo "Выстрел";
    }
}

class Gun
{
    private $bullet = 0;

    public function reload()
    {
        $this->bullet = 1;
    }

    public function shoot()
    {
        echo "Выстрел";
    }
}

$rifle = new Gun();
$h = new BadHunter();
$h->setGan($rifle);

$h->reload();
$rifle->shoot();
$h->reload();
$rifle->shoot();