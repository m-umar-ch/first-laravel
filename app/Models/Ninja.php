<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    // fillable added to allow mass assigning
    protected $fillable = ["name", "skill", "power", "bio"];
    /** @use HasFactory<\Database\Factories\NinjaFactory> */
    use HasFactory;
}

/**
 * @info
 * 
 * php artisan tinker
 * use App\Models\Ninja
 * Ninja::create(['name'=>'mario', 'skill'=> 'combat', 'power'=> 77, 'bio'=> 'Itallian MF'])
 * 
 * Ninja::all()
 * Ninja::find(2)
 */
