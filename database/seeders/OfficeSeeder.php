<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Division::factory()
            ->sequence([

            ])
            ->for(Division::factory())
            ->create();
    }
}
