<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function paths(): BelongsToMany
    {
        return $this->belongsToMany(Path::class);
    }

    public function technologies(): HasMany
    {
        return $this->hasMany(Technology::class);
    }

    public function tutorial(): HasMany
    {
        return $this->hasMany(Tutorial::class);
    }

}
