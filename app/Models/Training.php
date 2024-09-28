<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Observers\TrainingObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([TrainingObserver::class])]

class Training extends Model
{

    protected $guarded = [];
    use HasFactory;
    use Notifiable;

    public function currentstatus()
    {
        return $this->belongsTo(Currentstatus::class);
    }

    public function interest()
    {
        return $this->belongsTo(Interest::class);
    }

}
