<?php

declare(strict_types=1);

namespace App\Models;

use App\Observers\DirectionObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[ObservedBy(DirectionObserver::class)]
class Direction extends Model
{
    use HasFactory;

    /**
     * @var array<string,string>
     */
    protected $fillable = [
        'priority',
        'abbreviation',
        'designation',
    ];

    public function divisions(): HasMany
    {
        return $this->hasMany(Division::class);
    }
}
