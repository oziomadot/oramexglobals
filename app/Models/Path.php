<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Path extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }

}
