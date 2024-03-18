<?php

declare(strict_types=1);

namespace App\Models;

use App\Observers\GradeObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(GradeObserver::class)]
class Grade extends Model
{
    use HasFactory;

    /**
     * @var string[] |array<string,string>
     */
    protected $fillable = [
        'priority',
        'level',
        'tier',
        'code',
        'description',
    ];
}
