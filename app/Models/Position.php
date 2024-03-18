<?php

declare(strict_types=1);

namespace App\Models;

use App\Observers\PositionObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(PositionObserver::class)]
class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'priority',
        'description',
    ];
}
