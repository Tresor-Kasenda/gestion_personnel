<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Direction;
use Illuminate\Database\Seeder;

class DirectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Direction::factory()
            ->sequence([
                [
                    'priority' => '',
                    'abbreviation' => '',
                    'description' => '',
                ],
                [
                    'priority' => '',
                    'abbreviation' => '',
                    'description' => '',
                ],
                [
                    'priority' => '',
                    'abbreviation' => '',
                    'description' => '',
                ],
            ])
            ->create();
    }
}
