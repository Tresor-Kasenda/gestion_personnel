<?php

declare(strict_types=1);

namespace App\Models;

use App\Observers\DivisionObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[ObservedBy(DivisionObserver::class)]
class Division extends Model
{
    use HasFactory;

    /**
     * @var string[]|array<string,string>
     */
    protected $fillable = [
        'direction_id',
        'priority',
        'abbreviation',
        'designation',
    ];

    public function direction(): BelongsTo
    {
        return $this->belongsTo(Direction::class);
    }

    public function offices(): HasMany
    {
        return $this->hasMany(Office::class);
    }
}
