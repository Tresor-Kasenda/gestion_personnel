<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Direction extends Model
{
    use HasFactory;

    /**
     * @var array<string,string>
     */
    protected $fillable = [
        'priority',
        'abbreviation',
        'designation'
    ];

    public function divisions(): HasMany
    {
        return $this->hasMany(Division::class);
    }
}
