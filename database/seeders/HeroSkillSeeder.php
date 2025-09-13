<?php

namespace Database\Seeders;

use App\Models\HeroSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroSkill::factory()->count(20)->create();
    }
}
