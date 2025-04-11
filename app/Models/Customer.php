<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'customers';

    public function contactus(): HasMany
    {
        return $this->hasMany(ContactUs::class);
    }
}
