<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','lang2_Name','lang3_Name'];
    public function project()
    {
        return $this->hasMany(Project::class);
    }
}
