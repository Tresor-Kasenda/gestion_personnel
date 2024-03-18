<?php

declare(strict_types=1);

namespace App\Observers;

use App\Models\Grade;

class GradeObserver
{
    /**
     * Handle the Grade "created" event.
     */
    public function created(Grade $grade): void
    {

    }

    /**
     * Handle the Grade "updated" event.
     */
    public function updated(Grade $grade): void
    {

    }

    /**
     * Handle the Grade "deleted" event.
     */
    public function deleted(Grade $grade): void
    {

    }

    /**
     * Handle the Grade "restored" event.
     */
    public function restored(Grade $grade): void
    {

    }

    /**
     * Handle the Grade "force deleted" event.
     */
    public function forceDeleted(Grade $grade): void
    {

    }
}
