<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSkill extends Model
{
    protected $fillable = ['user_id', 'skill_id'];
    use HasFactory;
}
