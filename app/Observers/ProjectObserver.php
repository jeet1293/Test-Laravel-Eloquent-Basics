<?php

namespace App\Observers;

use App\Models\Project;
use App\Models\Stat;

class ProjectObserver
{
    /**
     * Handle the Project "created" event.
     */
    public function created(): void
    {
        Stat::query()->increment('projects_count');
    }
}