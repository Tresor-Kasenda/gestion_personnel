<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Direction;
use App\Models\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Division::factory()
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
            ->for(Direction::factory())
            ->create();
    }
}
