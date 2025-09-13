<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hero;
use App\Models\Skill;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HeroSkill>
 */
class HeroSkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hero_id' => Hero::inRandomOrder()->first()->id,
            'skill_id' => Skill::inRandomOrder()->first()->id
        ];
    }
}
