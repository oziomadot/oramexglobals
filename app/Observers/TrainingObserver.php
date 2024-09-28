<?php

namespace App\Observers;

use App\Models\Training;
use Illuminate\Support\Facades\Cache;

class TrainingObserver
{
    /**
     * Handle the Training "created" event.
     */
    public function created(Training $training): void
    {
        Cache::flush();
    }

    /**
     * Handle the Training "updated" event.
     */
    public function updated(Training $training): void
    {
        Cache::flush();
    }

    /**
     * Handle the Training "deleted" event.
     */
    public function deleted(Training $training): void
    {
        Cache::flush();
    }

    /**
     * Handle the Training "restored" event.
     */
    public function restored(Training $training): void
    {
        Cache::flush();
    }

    /**
     * Handle the Training "force deleted" event.
     */
    public function forceDeleted(Training $training): void
    {
        Cache::flush();
    }
}
