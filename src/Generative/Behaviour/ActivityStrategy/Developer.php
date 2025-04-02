<?php

namespace App\Generative\Behaviour\ActivityStrategy;

class Developer
{
    private Activity $activity;

    public function setActivity(Activity $activity)
    {
        $this->activity = $activity;
    }

    public function make()
    {
        $this->activity->doActivity();
    }
}